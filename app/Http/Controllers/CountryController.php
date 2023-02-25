<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    
    public function getCountry()
    {
       
       $Country = Country::get();
       return view('Country',compact('Country'));
    }

    

    public function createCountry(Request $request)
    {
        if($request->method()=='GET')
        {
            return view('Create-Country');
        }
        if($request->method()=='POST')
        
        {
            $validator = $request->validate([
                'name'      => 'required',
            ]);

            Country::create([
                'name' => $request->name,
            ]);

            return redirect()->route('admin.home')->with('success', 'Country Create Successfuly');
        }
    }

}
