<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandsController extends Controller
{
    public function lands(){
        session_start();
        if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true){
            return redirect('home')->with('openLogin', true);
        }
        return view('lands');
    }

}
