<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin() {
        session_start();
        if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true){
            return redirect('home')->with('openLogin', true);   
        }
        else if($_SESSION['permission'] !== 5){
            return redirect('no-permission');
        }
        else 
        {

            $familias = DB::select("SELECT ID_Familie, JmenoFamilie FROM Familie", [1]);
            $freeUsers = DB::select("SELECT id, full_name FROM users WHERE familia_id IS NULL");


            return view('admin')->with('familias', $familias)->with('freeUsers', $freeUsers);
        }
    }

}