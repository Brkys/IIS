<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Familie;
use App\userModel;
use App\newsModel;

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

    public function createNewFamilia(Request $req)
    {
        session_start();
        if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true){
            return redirect('home')->with('openLogin', true);   
        }
        else if($_SESSION['permission'] !== 5){
            return redirect('no-permission');
        }

        $newFamilia = new Familie();
        $newFamilia->JmenoFamilie = $req->input('familia_name');
        $newFamilia->ID_Dona = $req->input('don_id');
        $newFamilia->save();


        $newDon = userModel::find($req->input('don_id'));
        $newDon->permission = 4;
        $newDon->familia_id = $newFamilia->ID_Familie;
        $newDon->save();

        $new = new newsModel();
        $new->date = date("Y-m-d H:i:s");
        $new->title = "Nová familie";
        $new->content = "Vznikla familie $newFamilie->JmenoFamilie, jejím donem je $newDon->full_name";
        $new->save();
    }

}