<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowCriminalController extends Controller
{
    public function show() {
        session_start();
        if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true){
            return redirect('home')->with('openLogin', true);
        }
        else if($_SESSION['permission'] < 0){
            return redirect('home');
        }
        else return redirect('show-criminal');
    }

}
