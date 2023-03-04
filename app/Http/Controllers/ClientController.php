<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Country;
use App\Models\City;

use Illuminate\Http\Request;
use Postmark\PostmarkClient;

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

    public function getSingleClient($id)
    { 
       $Client = Client::where('id', $id)->first();
       $Country = Country::where('id', $Client->country_id)->first()->name;
       $nationality = Country::where('id', $Client->nationality_id)->first()->name;
       $City = City::where('id', $Client->city_id)->first()->name;
       return view('pages.clientsDetails',compact('Client','City','Country','nationality'));
    }
    
    public function createClient(Request $request)
    {
        if($request->method()=='GET')
        {
        $Countries = Country::get();
        $Citiez= City::get();
            return view('pages.addClient',compact('Countries','Citiez'));
        }
        if($request->method()=='POST')
        {
            
            $validator = $request->validate([
                'fName' => ['required', 'string', 'max:255'],
                'lName' => ['required', 'string', 'max:255'],
                'gender' => ['required', 'string', 'max:255'],
                'religion' => ['required', 'string', 'max:255'],
                'address' => ['required'],
                'email' => ['required', 'email', 'string', 'max:255'],
                'nationality_id' => ['required', 'numeric'],
                'mobile' => ['required', 'numeric'],
                'city_id' => ['required', 'numeric'],
                'country_id' => ['required', 'numeric'],
                'company_id' => ['numeric'],
                'dBirth' => ['required'],
                'hPhone' => ['numeric'],
                'wPhone' => ['numeric'],
                'region' => ['required', 'string', 'max:255'],

                
            ]);

           $createClient= Client::create([
                'fName' => $request->fName,
                'lName' => $request->lName,
                'gender' => $request->gender,
                'religion' => $request->religion,
                'address' => $request->address,
                'email' => $request->email,
                'nationality_id' => $request->nationality_id,
                'mobile' => $request->mobile,
                'region' => $request->region,
                'wPhone' => $request->wPhone,
                'hPhone' => $request->hPhone,
                'dBirth' => $request->dBirth,
                'country_id' => $request->country_id,
                'company_id' => $request->company_id,
                'city_id' => $request->city_id
            ]);
            if($createClient){
                $client = new PostmarkClient("2a039fef-b2e8-45e4-8071-0037570a4f90");

// Send an email:
$sendResult = $client->sendEmail(
  "Gleem@postman.gleemtours.com",
  "$request->email",
  "مرحبا بك $request->fName $request->lName ",
  "شركة Gleem ترحب بك
  تم تسجيل جميع معلوماتك الشخصية في نظام المتابعة لدينا
  شكرا لك"
);
            }

            return redirect()->route('home')->with('success', 'Client Create Successfuly');
        }
    }
}


