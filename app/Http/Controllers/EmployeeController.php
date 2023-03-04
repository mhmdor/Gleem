<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createEmployee(Request $request)
    {
        if($request->method()=='GET')
        {
        
            return view('pages.addEmployee');
        }
        if($request->method()=='POST')
        {
            $validator = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
                'phone' => ['required', 'max:255'],
                'role' => ['required', 'max:255'],
            ]);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ]);

            return redirect()->route('home')->with('success', 'Employee Create Successfuly');
        }
    }
}
