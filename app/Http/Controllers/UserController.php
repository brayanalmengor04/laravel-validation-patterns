<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    //

    public function register(){return view("user.register");}  

   public function save(UserRequest $request)
    {
        // Save insert DB
        return redirect(route("user.register"))->with("message","Successfully Registered user"); 
    } 
}