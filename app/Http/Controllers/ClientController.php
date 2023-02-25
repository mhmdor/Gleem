<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Country;

use Illuminate\Http\Request;

class ClientController extends Controller
{    

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getClient()
    {
       $Clients = Client::get();
       return view('pages.clients',compact('Clients'));
    }
    
    public function createClient(Request $request)
    {
        if($request->method()=='GET')
        {
        $Countries = Country::get();
            return view('pages.addClient',compact('Countries'));
        }
        if($request->method()=='POST')
        {
            
            $validator = $request->validate([
                'fName' => ['required', 'string', 'max:255'],
                'sName' => ['required', 'string', 'max:255'],
                'lName' => ['required', 'string', 'max:255'],
                'gender' => ['required', 'string', 'max:255'],
                'religion' => ['required', 'string', 'max:255'],
                'address' => ['required'],
                'email' => ['required', 'email', 'string', 'max:255'],
                'nationality_id' => ['required', 'numeric'],
                'idNumber' => ['required', 'numeric'],
                'mobile' => ['required', 'numeric'],
                'EsYear' => ['required', 'numeric'],
                'EsMonth' => ['required', 'numeric'],
                'city_id' => ['required', 'numeric'],
                'country_id' => ['required', 'numeric'],
                'company_id' => ['numeric'],
                'dBirth' => ['required'],
                'hPhone' => ['numeric'],
                'wPhone' => ['numeric'],
                'region' => ['required', 'string', 'max:255'],

                
            ]);

            Client::create([
                'fName' => $request->fName,
                'sName' => $request->sName,
                'lName' => $request->lName,
                'gender' => $request->gender,
                'religion' => $request->religion,
                'address' => $request->address,
                'email' => $request->email,
                'nationality_id' => $request->nationality_id,
                'idNumber' => $request->idNumber,
                'mobile' => $request->mobile,
                'region' => $request->region,
                'wPhone' => $request->wPhone,
                'hPhone' => $request->hPhone,
                'dBirth' => $request->dBirth,
                'country_id' => $request->country_id,
                'company_id' => $request->company_id,
                'EsMonth' => $request->EsMonth,
                'city_id' => $request->city_id,
                'EsYear' => $request->EsYear,
            ]);

            return redirect()->route('home')->with('success', 'Client Create Successfuly');
        }
    }
}


