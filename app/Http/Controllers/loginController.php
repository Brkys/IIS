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
        else{

            return view('test')->with('username', $username, 'pwd', $password);
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
}
