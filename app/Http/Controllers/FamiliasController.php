<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FamiliasController extends Controller
{
    public function familias(){
        session_start();
            if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true){
                return redirect('home')->with('openLogin', true);
            }
            return view('familias');
    }
}
