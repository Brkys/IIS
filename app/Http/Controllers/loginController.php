<?php

namespace App\Http\Controllers;

use App\userModel;
//use DB;
use Illuminate\Http\Request;

class loginController extends Controller
{
 
    public function login(Request $req)
    {
        $model = new userModel();
        $name = $req->input('username');
        $pwd = $req->input('password');
        $loginCorrect = false;
        $model = $model::all();
        forech ($model as $key => $value) {
            if($value->name == $name && $value->password == $pwd){
                $loginCorrect = true;
                $data = $name;
            }
        }

        //$data = array("name" => $req->input('username'), "pwd" => $req->input('password'));
        return view('home')->with('data', $data);
    }
}
