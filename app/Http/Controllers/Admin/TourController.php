<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\Tour;
use Illuminate\Http\Request;
use App\Models\Recipe;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::latest()->get();
    
        return view('whatweoffer', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'duration' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'availability' => 'required|string',
            'capacity' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image',
        ]);
    
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('tours', 'public');
        }
    
        Tour::create($data);
        return redirect()->route('stores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        return view('admin.tours.edit', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'duration' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'availability' => 'required|string',
            'capacity' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image',
        ]);
    
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('tours', 'public');
        }
    
        $tour->update($data);
    
        return redirect()->route('stores.index')
            ->with('success', 'Tour updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        $tour->delete();
    
        return redirect()->route('stores.index')
            ->with('success', 'Tour deleted successfully.');
    }
}
