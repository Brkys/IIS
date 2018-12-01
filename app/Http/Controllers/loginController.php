<?php

namespace App\Http\Controllers;

use App\userModel;
use Illuminate\Http\Request;

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

        $validator = Validator::make($req, [
            'username' => 'required|max:255',
            'password' => 'required'
        ]);
        
        //validace dat - v pripade chyby dojde automaticky k presmerovani zpet na stranku, odkud prisel pozadavek
        //$this->validate($req, $rules, $validatorMessagesCzech);
        
        $name = $req->input('username');
        $pwd = $req->input('password');
        $found = userModel::FindUser($name, $pwd);
        //uzivtel nalezen
        if($found){
            session_start();
            $_SESSION['loggedIn'] = true;
            $_SESSION['id'] = $found->id;
            $_SESSION['username'] = $found->name;
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
}
