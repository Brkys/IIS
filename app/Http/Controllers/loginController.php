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
        $data = -1;
        $model = $model::all();
        /*foreach $model as $mod{
            if($mod->name == $name && $mod->password == $pwd){
                $data = $mod;
            }
        }*/
        
        $data = array("name" => $req->input('username'), "pwd" => $req->input('password'));
        return view('home')->with('data', $data);
    }
}
