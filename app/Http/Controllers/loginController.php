<?php

namespace App\Http\Controllers;

use App\userModel;
use Illuminate\Http\Request;

class loginController extends Controller
{
 
    public function login(Request $req)
    {

        $name = $req->input('username');
        $pwd = $req->input('password');
        $found = userModel::FindUser($name, $pwd);
        if($found){
            session_start();
            $_SESSION['logedIn'] = true;
            $_SESSION['id'] = $value->id;
            $_SESSION['username'] = $value->name;
            $_SESSION['permission'] = $value->permission;
            return redirect('home');
        }
        //login se nepodaril
        return view('home')->with('data', $found);
      //  return redirect('home')->with(['openLogin' => true]);
    }
}
