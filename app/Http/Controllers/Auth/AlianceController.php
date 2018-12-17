<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $notShow = DB::select("SELECT a.ID_Familie AS PozvankaOd, a.JmenoFamilie AS JmenoOd, b.ID_Familie AS PozvankaPro, b.JmenoFamilie AS JmenoPro
				FROM PozvankaDoAliance
				INNER JOIN Familie as a
				    ON c.ID_Familie1 = a.ID_Familie
				INNER JOIN Familie as b
				    ON c.ID_Familie2 = b.ID_Familie", [1]);

        $familie = DB::select("SELECT JmenoFamilie, ID_Familie FROM Familie WHERE ID_Familie != ".$_SESSION['familia'])

        return view('show-alliance')->with('familie', $familie)->with('notShow', $notShow);
    }

}