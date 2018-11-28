<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
 
    public function test()
    {
        return view('test');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('test');
    }
}
