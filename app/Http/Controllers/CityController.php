<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createCity(Request $request)
    {
        if($request->method()=='GET')
        {
        $cities = Country::get();
            return view('Create-City',compact('Countries'));
        }
        if($request->method()=='POST')
        {
            $validator = $request->validate([
                'name'      => 'required',
                'country_id' => 'required|numeric'
            ]);

            City::create([
                'name' => $request->name,
                'country_id' => $request->country_id,
            ]);

            return redirect()->route('home')->with('success', 'City Create Successfuly');
        }
    }



}
