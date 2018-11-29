<?php

namespace App\Http\Controllers;

use App\userModel;
use App\User;
use DB;
use Illuminate\Http\Request;

class loginController extends Controller
{
 
    public function login(Request $req)
    {
        $model = new User();
        $model = $model::where('username');
        DB::connection()->getPdo();
        $data = array("name" => $req->input('username'), "pwd" => $req->input('password'));
        return view('home')->with('data', $model);
    }
}
