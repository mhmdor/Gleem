<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function getCompanies()
    {
       $Companies = Company::get();
       return view('pages.companies',compact('Companies'));
    }

    public function getSingleCompany($id)
    { 
       $Company = Company::where('id', $id)->first();
      $Country = Country::where('id', $Company->country_id)->first()->name;
       $City = City::where('id', $Company->city_id)->first()->name;
        
       return view('pages.companyDetails',compact('Company','City','Country'));
    }
    
    public function createCompany(Request $request)
    {
        
        if($request->method()=='GET')
        {
        $Countries = Country::get();
        $Citiez = City::get();
            return view('pages.addCompany',compact('Countries','Citiez'));
        }
        if($request->method()=='POST')
        {
            
            $validator = $request->validate([
                'companyName' => ['required', 'string', 'max:255'],
                'PersonName' => ['required', 'string', 'max:255'],
                'address' => ['required'],
                'companyEmail' => ['required', 'email', 'string', 'max:255'],
                'personEmail' => ['required', 'email', 'string', 'max:255'],
                'mobPhone' => ['required', 'numeric'],
                'companyPhone' => ['required', 'numeric'],
                'workPhone' => ['required', 'numeric'],
                'city_id' => ['required', 'numeric'],
                'country_id' => ['required', 'numeric'],
            ]);
            if($request->photo == null){
                $image=Null;
            }else{
                $image = $request->photo;
                $destinationPathImg = public_path('assets/uploads/logos/');
                if (!$image->move($destinationPathImg, $image->getClientOriginalName())) {
                    return 'Error saving the file.';
                }
        
                $image = $image->getClientOriginalName();
            }
            

            Company::create([
                'companyName' => $request->companyName,
                'PersonName' => $request->PersonName,
                'personEmail' => $request->personEmail,
                'companyEmail' => $request->companyEmail,
                'mobPhone' => $request->mobPhone,
                'address' => $request->address,
                'companyPhone' => $request->companyPhone,
                'workPhone' => $request->workPhone,
                'country_id' => $request->country_id,
                'city_id' => $request->city_id,
                'photo'=> $image,
            ]);

            return redirect()->route('home')->with('success', 'Companies Create Successfuly');
        }}
}
