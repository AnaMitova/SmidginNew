<?php

namespace App\Http\Controllers\Admin;

use App\Models\TourRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tour;

class TourRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = TourRequest::with('tour')
            ->latest()
            ->get();
    
        return view('admin.requests.index', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tour_id'=>'required|exists:tours,id',
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'date'=>'required|date',
            'people'=>'required|integer',
            'message'=>'nullable'
        ]);
    
        TourRequest::create($data);
    
        return back()->with('success','Request sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TourRequest $tourRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TourRequest $tourRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TourRequest $tourRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TourRequest $tourRequest)
    {
        //
    }
}
