<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
 
    public function login(Request $req)
    {
        $data = array('name' => $req->input('username'), 'pwd' => $req->input('password'));
        return view('home');
    }
}
