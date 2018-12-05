<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\criminal;

class CreateCriminalController extends Controller
{
    public function create(){
        session_start();
        if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true){
            return redirect('home')->with('openLogin', true);
        }
        else if($_SESSION['permission'] < 3 || $_SESSION['permission'] > 4){
            return redirect('no-permission');
        }
        else 
        {
            $lands = DB::select("SELECT ID_Uzemi, Adresa FROM Uzemi", [1]);

            return view('create-criminal')->with('lands', $lands);
        }
    }

    public function createCriminal(Request $req)
    {
        session_start();
        if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true){
            return redirect('home')->with('openLogin', true);
        }
        else if($_SESSION['permission'] < 3 || $_SESSION['permission'] > 4){
            return redirect('no-permission');
        }
        else 
        {
            $criminal = new criminal();
            $criminal->ID_Uzemi = $req->input('land_id');
            $criminal->TypCinnosti = $req->input('activity_content');
            $criminal->DatumZacatku = date("Y-m-d");
            $criminal->DatumUkonceni = $req->input('end_date');
            $criminal->save();

            return view('create-criminal')->with('lands', $lands);
        }
    }

}
