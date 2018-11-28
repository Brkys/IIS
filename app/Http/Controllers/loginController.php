<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
 
    public function index(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');
        if($username == 'ok' && $password == 'ok')
        {
            return view('home');
        }
        return view('test');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
}
