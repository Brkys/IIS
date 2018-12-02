<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignCriminalController extends Controller
{
    public function assign(){
        session_start();
        if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true){
            return redirect('home')->with('openLogin', true);
        }
        else {
            if($_SESSION['permission'] < 2){
                return redirect('home');
            }
            else return view('assign-criminal');
        }
    }

}
