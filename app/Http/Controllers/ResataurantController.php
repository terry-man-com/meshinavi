<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class ResataurantController extends Controller
{
    public function index()
    {
    $restaurants = Restaurant::all();
    return view('restaurants.index', compact('restaurants'));
    }

    public function show(Restaurant $restaurant)
    {
        return view('restaurants.show', compact('restaurant'));
    }
}
