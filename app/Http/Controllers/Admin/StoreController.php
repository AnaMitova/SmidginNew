<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Models\Recipe;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::latest()->get();
        $recipes = Recipe::latest()->get();
    
        return view('admin.stores.index', compact('stores', 'recipes'));
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