<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class loginController extends Controller
{
 
    public function login(Request $req)
    {
        try {
            DB::connection()->getPdo();
            if(DB::connection()->getDatabaseName()){
                echo "Yes! Successfully connected to the DB: " . DB::connection()->getDatabaseName();
            }else{
                die("Could not find the database. Please check your configuration.");
            }
        } catch (\Exception $e) {
            die("Could not open connection to database server.  Please check your configuration.");
        }
        $data = array("name" => $req->input('username'), "pwd" => $req->input('password'));
        return view('home')->with('data', $data);
    }
}
