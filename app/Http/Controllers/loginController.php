<?php

namespace App\Http\Controllers;

use App\userModel;
//use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class loginController extends Controller
{
 
    public function login(Request $req)
    {
        $model = new userModel();
        $name = $req->input('username');
        $pwd = $req->input('password');
        $loginCorrect = false;
        $model = $model::all();
       /* foreach ($model as $key => $value) {
            if($value->name == $name && $value->password == $pwd){
                $loginCorrect = true;
            }
        }*/
        if(/Auth::attempt($model)){
            return 'Is logged in';
            return view('/');
        }

        //$data = array("name" => $req->input('username'), "pwd" => $req->input('password'));
        return view('home');
    }
}
