<?php

namespace App\Http\Controllers;

use App\userModel;
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
        foreach ($model as $key => $value) {
            if($value->name == $name && $value->password == $pwd){
                /*session_start();
                $_SESSION['logedIn'] = true;
                $_SESSION['id'] = $value->id;
                $_SESSION['username'] = $value->name;
                return redirect('home');*/
            }
        }

        //$data = array("name" => $req->input('username'), "pwd" => $req->input('password'));
        return view('home')->with('openLogin', true);
    }
}
