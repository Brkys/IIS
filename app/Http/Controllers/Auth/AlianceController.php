<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\AlianceRequest;
use App\newsModel;

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
				FROM PozvankaDoAliance AS c
				INNER JOIN Familie as a
				    ON c.ID_Familie1 = a.ID_Familie
				INNER JOIN Familie as b
				    ON c.ID_Familie2 = b.ID_Familie", [1]);

        $familie = DB::select("SELECT JmenoFamilie, ID_Familie FROM Familie WHERE ID_Dona IS NOT NULL AND ID_Familie != ".$_SESSION['familia']);

        return view('show-alliance')->with('familie', $familie)->with('notShow', $notShow);
    }

    public function alianceRequest(Request $req)
    {
        session_start();
        if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true){
            return redirect('home')->with('openLogin', true);   
        }
        else if($_SESSION['permission'] !== 4){
            return redirect('no-permission');
        }

        $request = new AlianceRequest();
        $request->ID_Familie1 = $_SESSION['familia'];
        $request->ID_Familie2 = $req->input('familia_id');
        $request->save();

        $familiaFrom = DB::select("SELECT JmenoFamilie FROM Familie WHERE ID_Familie = ".$_SESSION['familia'])[0]->JmenoFamilie;
        $familiaTo = DB::select("SELECT JmenoFamilie FROM Familie WHERE ID_Familie = ".$request->ID_Familie2)[0]->JmenoFamilie;

		$news = new newsModel();
		$news->date = date("Y-m-d H:i:s");
        $news->title = "Aliance";
        $news->content = "Familie $familiaFrom navrhnula alianci familii $familiaTo.";
        $news->save();	

        return redirect('show-alliance');
    }

}
