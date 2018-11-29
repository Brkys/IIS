<?php

namespace App\Http\Controllers;

use App\userModel;
use DB;
use Illuminate\Http\Request;

class loginController extends Controller
{
 
    public function login(Request $req)
    {
        $model = new userModel();
        DB::connection()->getPdo();
        $data = array("name" => $req->input('username'), "pwd" => $req->input('password'));
        return view('home')->with('data', $data);
    }
}
