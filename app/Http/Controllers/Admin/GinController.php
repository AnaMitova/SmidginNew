<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GinController extends Controller
{
    public function create()
    {
        $gin = new Gin([
            'accent_color'   => '#EF4135',
            'name_font'      => 'font-montserrat',
            'active'         => true,
            'sort_order'     => (Gin::max('sort_order') ?? 0) + 1,
            'heading_one'    => 'Distilled to Perfection',
            'heading_two'    => 'Flavor & Botanicals',
            'heading_three'  => 'How To Enjoy It',
        ]);

        return view('admin.gins.create', compact('gin'));
    }

    public function store(Request $request)
    {
        $gin = Gin::create($this->validated($request));

        return redirect()->to(route('stores.index') . '#gins')
            ->with('success', 'Џинот „' . $gin->name . '“ е креиран.');
    }

    public function edit(Gin $gin)
    {
        return view('admin.gins.edit', compact('gin'));
    }

    public function update(Request $request, Gin $gin)
    {
        $gin->update($this->validated($request, $gin));

        return redirect()->to(route('stores.index') . '#gins')
            ->with('success', 'Џинот „' . $gin->name . '“ е зачуван.');
    }

    public function destroy(Gin $gin)
    {
        $gin->delete();

        return redirect()->to(route('stores.index') . '#gins')
            ->with('success', 'Џинот е избришан.');
    }

    /**
     * Shared validation for create and update.
     *
     * Images can be uploaded or left alone — an empty file input keeps
     * whatever the gin already had.
     */
    protected function validated(Request $request, ?Gin $gin = null): array
    {
        $data = $request->validate([
            'name'           => 'required|string|max:100',
            'slug'           => 'nullable|string|max:100',
            'accent_color'   => 'required|string|max:20',
            'name_font'      => 'required|string|in:' . implode(',', array_keys(Gin::FONTS)),
            'tagline'        => 'nullable|string|max:1000',
            'buy_url'        => 'nullable|url|max:255',
            'heading_one'    => 'nullable|string|max:120',
            'body_one'       => 'nullable|string',
            'heading_two'    => 'nullable|string|max:120',
            'body_two'       => 'nullable|string',
            'heading_three'  => 'nullable|string|max:120',
            'body_three'     => 'nullable|string',
            'custom_path'    => 'nullable|string|max:255',
            'next_gin_id'    => 'nullable|integer|exists:gins,id',
            'sort_order'     => 'nullable|integer|min:0',
            'card_image'     => 'nullable|image|max:5120',
            'bottle_image'   => 'nullable|image|max:5120',
            'wordmark_image' => 'nullable|image|max:5120',
        ], [
            'name.required'   => 'Внесете име на џинот.',
            'buy_url.url'     => 'Линкот за купување мора да биде целосна адреса (https://...).',
            'card_image.image' => 'Сликата за картичката мора да биде слика.',
        ]);

        $data['active'] = $request->boolean('active');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        // A gin pointing at itself would dead-end the page.
        if ($gin && (int) ($data['next_gin_id'] ?? 0) === $gin->id) {
            $data['next_gin_id'] = null;
        }

        foreach (['card_image', 'bottle_image', 'wordmark_image'] as $field) {
            if ($request->hasFile($field)) {
                $this->deleteUpload($gin?->{$field});
                $data[$field] = 'storage/' . $request->file($field)->store('gins', 'public');
            } else {
                unset($data[$field]);
            }
        }

        return $data;
    }

    /**
     * Only removes files we uploaded — the original gins point at assets that
     * ship in public/ and must stay put.
     */
    protected function deleteUpload(?string $path): void
    {
        if ($path && str_starts_with($path, 'storage/')) {
            Storage::disk('public')->delete(substr($path, strlen('storage/')));
        }
    }
}
