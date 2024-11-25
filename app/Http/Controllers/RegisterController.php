<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function signupform()
    {
        return view('signup');
    }
    public function login()
    {
        return view('login');
    }

    public function register(Request $request)
    {
        if($request->isMethod("post")){
          
            $data =  $request->validate([
                'name' => 'required',
                'email' => 'required|string|email|max:255|unique:users',
                'phone_no' => 'nullable|string|regex:/^\d{10}$/',
                'password' => 'required|string|min:8',
                
            ]);
            // 
            $data['password'] = bcrypt($data['password']);
            
            User::create($data);
            return redirect()->route('login')->with('success', 'Registration successful. Please login.');
            
        }
        return view("signup");
       
    }
}
