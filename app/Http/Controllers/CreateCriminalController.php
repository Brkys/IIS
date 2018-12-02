<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateCriminalController extends Controller
{
    public function create(){
        session_start();
        if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true){
            return redirect('home')->with('openLogin', true);
        }
        else if($_SESSION['permission'] < 3 || $_SESSION['permission'] > 4){
            return redirect('home');
        }
        else return view('create-criminal');
    }

}
