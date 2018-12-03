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
            return view('familias');
    }

    public function viewFamilias() {
    	$familias = Familia::all();
    	$dons = array();
    	$counts = array();
    	$iterator = 0;
    	$familiaNames = array();
    	foreach ($familia as $familias) {
    		array_push($familiaNames, $familias['JmenoFamilie'])
    		array_push($dons, $familias['ID_Dona']);
    		$counts[$iterator] = userModel::where('familia_id', '=', $familia['ID_Familie'])->count();
    	}
    	$users = Familia::all();
    	foreach ($id as $dons) {
    		$donNames = userModel::find($id)['name']->get();
    	}
    	$result = array();
    	array_push($result, $familiaNames)
    	array_push($result, $donNames);
    	array_push($result, $counts);
    	return view('familias')->with('data', $result);
    }
}
