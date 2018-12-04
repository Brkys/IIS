<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familia;
use App\userModel;

class FamiliasController extends Controller
{
    public function familias(){
        session_start();
        if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true){
            return redirect('home')->with('openLogin', true);
        }
		$familias = Familia::all();
		$dons = userModel::where('permission', 4);
		$result = array();
    	foreach($familias as $key => $value){
			foreach($dons as $key2 => $value2)
			{
				if($value->ID_Dona == $value2->id){
					array_push($result, ['JmenoFamilie' => $value->JmenoFamilie,'JmenoDona' => $value2->full_name]);
				}
			}
		}
        return view('familias');
	}
}
