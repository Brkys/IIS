<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familie;
use App\userModel;
use Illuminate\Support\Facades\DB;

class FamiliasController extends Controller
{
    public function familias(){
        session_start();
        if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true){
            return redirect('home')->with('openLogin', true);
		}
		
		$familias = Familie::all();
		$dons = userModel::where('permission', 4)->get();
		$results = array();
    	foreach($familias as $key => $value){
			foreach($dons as $key2 => $value2)
			{
				if($value->ID_Dona == $value2->id){
					array_push($results, array ('ID_Familie' => $value->ID_Familie, 'JmenoFamilie' => $value->JmenoFamilie,'JmenoDona' => $value2->full_name));
				}
			}
		}
		foreach($results as &$result) {
			$members = userModel::where('familia_id', $result['ID_Familie'])->count();
			$result['members'] = $members;
		}
		unset($result);
		
        return view('familias')->with('results', $results);
	}

	public function editFamilia () {
		session_start();
        if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true){
            return redirect('home')->with('openLogin', true);
		}
		if($_SESSION['permission'] != 4) {
			return view('no-permission');
		}

		$usersAndPermissions = DB::select('SELECT full_name, permission FROM users WHERE familia_id = 2', [1]);
		
		return view('familia-editing')->with('users', $usersAndPermissions);
	}
}
