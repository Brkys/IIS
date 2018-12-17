<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllianceController extends Controller
{
 
    public function showAliances()
    {
        session_start();
        if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true){
            return redirect('home')->with('openLogin', true);
        }

		if($_SESSION['permission'] != 4) {
			return view('no-permission');
		}

        return view('show-alliance');
    }

}
