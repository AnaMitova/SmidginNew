<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\TourRequest;
use App\Models\Tour;
use App\Models\Event;
use App\Models\Subscriber;
use App\Models\SubscriptionSetting;
use App\Models\StoreLocation;
use App\Models\PromotionBanner;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::latest()->get();
        $recipes = Recipe::latest()->get();
        $requests =TourRequest::latest()->get();
        $tours = Tour::latest()->get();
        $events = Event::latest()->get();
        $subscribers = Subscriber::latest()->get();
        $subscriptionSetting = SubscriptionSetting::current();
        $storeLocations = StoreLocation::ordered()->get()->groupBy('region');
        $banner = PromotionBanner::firstOrCreate(
    [],
    [
        'text' => 'Welcome to Smidgin!',
        'link' => '/',
        'button_text' => 'Learn More',
        'background_color' => '#F97316',
        'text_color' => '#FFFFFF',
        'active' => true,
    ]
);


        return view('admin.stores.index', compact('stores', 'recipes', 'requests', 'tours', 'events', 'subscribers', 'subscriptionSetting', 'storeLocations', 'banner'));
    }

    public function create()
    {
        return view('admin.stores.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'city' => 'required',
            'type' => 'required',
            'address' => 'nullable',
            'hours' => 'nullable',
            'phone' => 'nullable',
            'link' => 'nullable',
            'image' => 'nullable|image',
        ]);
    
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('stores', 'public');
        }
    
        Store::create($data);
    
        return redirect()->route('stores.index');
    }

    public function edit(Store $store)
    {
        return view('admin.stores.edit', compact('store'));
    }
    
    public function update(Request $request, Store $store)
    {
        $data = $request->validate([
            'name' => 'required',
            'city' => 'required',
            'type' => 'required',
            'address' => 'nullable',
            'hours' => 'nullable',
            'phone' => 'nullable',
            'link' => 'nullable',
            'image' => 'nullable|image'
        ]);
    
        if ($request->hasFile('image')) {
    
            if ($store->image && \Storage::disk('public')->exists($store->image)) {
                \Storage::disk('public')->delete($store->image);
            }
    
            $data['image'] = $request->file('image')->store('stores', 'public');
        }
    
        $store->update($data);
    
        return redirect()->route('stores.index');
    }

    public function destroy(Store $store)
    {
        $store->delete();

        return back();
    }
    }