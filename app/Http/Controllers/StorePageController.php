<?php

namespace App\Http\Controllers;

use App\Models\Store;

class StorePageController extends Controller
{
    public function index()
    {
$stores = Store::all();

$cityData = $stores
    ->groupBy('city')
    ->map(function ($stores) {
        return [
            'buy' => $stores->where('type', 'buy')->values(),
            'taste' => $stores->where('type', 'taste')->values(),
        ];
    });

return view('findourstores', compact('stores', 'cityData'));
    }
}