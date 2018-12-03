<?php

namespace App\Http\Controllers;

use App\userModel;
use App\Invitation;
use App\Familie;
use Illuminate\Http\Request;
use Validator;

class loginController extends Controller
{
 
    /**
     * @param Request $req
     * @return view 
     */
    public function login(Request $req)
    {
        $rules = array(
            'username' => 'required|max:255',
            'password' => 'required'
        );
        
        $validatorMessagesCzech = array(
            'username.required' => "Vyplňte, prosím, uživatelské jméno", 
            'password.required' => "Vyplňte, prosím, heslo."
        ); 

        $validator = Validator::make($req->all(), $rules, $validatorMessagesCzech);
        
        if($validator->fails()) {
            return redirect('home')->withErrors($validator)->with('validationFail', true);
        }
        
        $name = $req->input('username');
        $pwd = $req->input('password');
        $found = userModel::FindUser($name, $pwd);
        //uzivtel nalezen
        if($found){
            session_start();
            $_SESSION['loggedIn'] = true;
            $_SESSION['id'] = $found->id;
            $_SESSION['username'] = $found->name;
            $_SESSION['familia'] = $found->familia_id;
            $_SESSION['permission'] = $found->permission;
            return redirect('home');
        }
        //login se nepodaril
        return redirect('home')->with(['openLogin' => true]);
    }

    public function logout(Request $req)
    {
        session_start();
        $_SESSION = array();
        session_destroy();
        return redirect('home')->with(['openLogin' => true]);
    }

    public function account(){
        session_start();
        if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true){
            return redirect('home')->with('openLogin', true);
        }
        else {
            $myInvites = Invitation::where('ID_User', $_SESSION['id'])->get();
            $invites = array();
            foreach ($myInvites as $key => $value){
                $familie = Familie::where('ID_Familie', $value->ID_Familie)->get();
                if(!empty($familie)){
                    $invite = $familie->toArray();
                    array_push($invites, $invite);
                }
            }

            return view('account')->with('invites', $invites);
        }
    }

    public function acceptInvite(){
        //$myInvites = Invitation::where('ID_User', $_SESSION['id']);
    }
}
