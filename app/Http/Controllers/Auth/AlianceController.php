<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlianceController extends Controller
{
 
    public function showAliances()
    {
        session_start();
        if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true){
            return redirect('home')->with('openLogin', true);   
        }
        else if($_SESSION['permission'] !== 4){
            return redirect('no-permission');
        }

        return view('show-alliance');
    }

}
