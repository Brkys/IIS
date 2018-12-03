<?php

namespace App\Http\Controllers;
use App\userModel;
use Illuminate\Http\Request;

class FreeUsersController extends Controller
{
    public function viewUsers() {
        session_start();
        if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true){
            return redirect('home')->with('openLogin', true);   
        }
        else if($_SESSION['permission'] !== 4){
            return redirect('home');
        }
        else {
            $freeUsers = userModel::FreeUser();
            return view('free-users')->with('freeUsers', true);
        }
    }

}
