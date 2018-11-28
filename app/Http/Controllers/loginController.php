<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
 
    public function login(Request $req)
    {
        $data = $req->input('username')
        return view('home')->with('data', $data);
    }
}
