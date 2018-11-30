<?php

namespace App\Http\Controllers;

use App\userModel;
use Illuminate\Http\Request;

class loginController extends Controller
{
 
    /**
     * @param Request $req
     * @return view 
     */
    public function login(Request $req)
    {
        $name = $req->input('username');
        $pwd = $req->input('password');
        $found = userModel::FindUser($name, $pwd);
        if($found === true){
            session_start();
            $_SESSION['loggedIn'] = true;
            /*$_SESSION['id'] = $value->id;
            $_SESSION['username'] = $value->name;
            $_SESSION['permission'] = $value->permission;*/
            return redirect('home');
        }
        //login se nepodaril
        return redirect('home')->with(['openLogin' => true]);
    }
}
