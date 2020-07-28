<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Property extends Controller
{
    public function index()
    {
        return view('listing');
    }

    public function create()
    {
        return view('property.create');
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'price' => 'required',
            'number_of_bedrooms' => 'required',
            'number_of_bathrooms' => 'required',
            'has_garden' => 'required',
            'has_gym' => 'required',
            'has_internet' => 'required',
            'has_swimming_pool' => 'required',
            'has_window_covering' => 'required',
            'has_parking' => 'required',
            'has_financing' => 'required',
        ]);

    }
}
