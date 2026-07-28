<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PromotionBanner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function edit()
    {
        $banner = PromotionBanner::firstOrCreate([]);

        return view('admin.banner.edit', compact('banner'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'text' => 'nullable|string|max:255',
            'link' => 'nullable|string|max:255',
            'button_text' => 'nullable|string|max:50',
            'background_color' => 'required|string|max:20',
            'text_color' => 'required|string|max:20',
            'active' => 'boolean',
        ]);

        $data['active'] = $request->has('active');

        $banner = PromotionBanner::firstOrCreate([]);
        $banner->update($data);

        return redirect()->route('stores.index')
            ->with('success', 'Banner updated successfully!');
    }
}
