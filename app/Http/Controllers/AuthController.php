<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Register(){
        return view('form');
    }
    
    public function Welcome(request $request){
        $first_name = $request["first_name"];
        $last_name = $request["last_name"];
        return view('welcom', with(['first_name' => $first_name, 'last_name' => $last_name]));
    }
}
