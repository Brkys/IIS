<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userModel;
use App\landModel;
use App\Familie;
use App\CProvadiK;
use App\criminal;

class ShowCriminalController extends Controller
{
    public function show() {
        session_start();
        if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true){
            return redirect('home')->with('openLogin', true);
        }
        else if($_SESSION['permission'] < 0 || $_SESSION['permission'] > 4){
            return redirect('no-permission');
        }
        else if($_SESSION['permission'] == 0){
            return $this->showMine();
        }
        else {
            return $this->showAll();
        }
    }

    public function showMine() {
        $CProvadi = CProvadiK::where('ID_Clena', $_SESSION['id']);
        $cinnostiId = array();
        foreach($CProvadi as $key => $value){
            array_push($cinnostiId, $value->ID_Cinnosti);
        }

        $kriminal = array();
        foreach($cinnostiId as $cinnost){
            $kriminalni = criminal::where('ID_Cinnosti', $cinnost);
            array_push($kriminal, $kriminalni);
        }

        
    }
}
