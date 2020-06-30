<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
    	return view('register');
    }

    public function proses(Request $request){
        $fname = $request->input('fname');
     	$lname = $request->input('lname');
     	return view('home',['fname' => $fname, 'lname' => $lname]);
    }
}