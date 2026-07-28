<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StoreLocation;
use App\Support\CountryFlags;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class StoreLocationController extends Controller
{
    public function create()
    {
        return view('admin.store-locations.create', [
            'regions'   => StoreLocation::REGIONS,
            'countries' => CountryFlags::options(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);

        // New locations land at the end of their region.
        $data['sort_order'] = (int) StoreLocation::max('sort_order') + 1;

        if ($request->hasFile('flag_image')) {
            $data['flag_image'] = $request->file('flag_image')->store('store-locations', 'public');
        }

        StoreLocation::create($data);

        return redirect()->route('stores.index')
            ->with('success', 'Location added.');
    }

    public function edit(StoreLocation $storeLocation)
    {
        return view('admin.store-locations.edit', [
            'location'  => $storeLocation,
            'regions'   => StoreLocation::REGIONS,
            'countries' => CountryFlags::options(),
        ]);
    }

    public function update(Request $request, StoreLocation $storeLocation)
    {
        $data = $this->validated($request);

        if ($request->boolean('remove_flag_image') && $storeLocation->flag_image) {
            Storage::disk('public')->delete($storeLocation->flag_image);
            $data['flag_image'] = null;
        }

        if ($request->hasFile('flag_image')) {
            if ($storeLocation->flag_image) {
                Storage::disk('public')->delete($storeLocation->flag_image);
            }
            $data['flag_image'] = $request->file('flag_image')->store('store-locations', 'public');
        }

        $storeLocation->update($data);

        return redirect()->route('stores.index')
            ->with('success', 'Location updated.');
    }

    public function destroy(StoreLocation $storeLocation)
    {
        if ($storeLocation->flag_image) {
            Storage::disk('public')->delete($storeLocation->flag_image);
        }

        $storeLocation->delete();

        return back()->with('success', 'Location deleted.');
    }

    /**
     * Persist a new ordering. Accepts the ids in their intended display order.
     */
    public function reorder(Request $request): JsonResponse
    {
        $data = $request->validate([
            'ids'   => 'required|array|min:1',
            'ids.*' => 'integer|exists:store_locations,id',
        ]);

        foreach (array_values($data['ids']) as $position => $id) {
            StoreLocation::whereKey($id)->update(['sort_order' => $position + 1]);
        }

        return response()->json(['ok' => true]);
    }

    /**
     * @return array<string, mixed>
     */
    private function validated(Request $request): array
    {
        $data = $request->validate([
            'name'       => 'required|string|max:120',
            'region'     => 'required|string|max:60',
            'flag_code'  => ['nullable', 'string', 'size:2', Rule::in(array_keys(CountryFlags::all()))],
            'flag_image' => 'nullable|image|max:2048',
            'store_url'  => 'nullable|url|max:2048',
        ], [
            'flag_code.in' => 'Pick a country code from the list, or upload a flag image instead.',
        ]);

        // Unchecked checkboxes are simply absent from the request.
        $data['is_active']        = $request->boolean('is_active');
        $data['opens_in_new_tab'] = $request->boolean('opens_in_new_tab');

        unset($data['flag_image']);   // handled by the caller

        return $data;
    }
}
