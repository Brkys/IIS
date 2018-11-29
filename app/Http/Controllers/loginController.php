<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
 
    public function login(Request $req)
    {
        $data = array("name" => $req->input('username'), "pwd" => $req->input('password'));

        $login = DB::table('users')->where(['name' => $data['username'], 'password' => $data['pwd']])->get();
        return view('home')->with('data', $data);
    }
}
