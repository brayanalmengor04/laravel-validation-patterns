<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function register(){return view("user.register");}  

   public function save(Request $request)
    {
        $request->validate([
            "firstname" => "required|min:2|max:15",
            "lastname" => "required|min:2|max:15",
            "email" => "required|email",
            "password" => "required|min:8"
        ], [
            "firstname.required" => "First name is required.",
            "firstname.min" => "First name must be at least 2 characters.",
            "firstname.max" => "First name cannot exceed 15 characters.",
            "lastname.required" => "Last name is required.",
            "lastname.min" => "Last name must be at least 2 characters.",
            "lastname.max" => "Last name cannot exceed 15 characters.",
            "email.required" => "Email is required.",
            "email.email" => "Please provide a valid email address.",
            "password.required" => "Password is required.",
            "password.min" => "Password must be at least 8 characters."
        ]);

        // Save insert DB

        return redirect(route("user.register"))->with("message","Successfully Registered user"); 
    } 
}