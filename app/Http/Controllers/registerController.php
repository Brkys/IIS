<?php

namespace App\Http\Controllers;

use App\userModel;
use Illuminate\Http\Request;
use Validator;

class registerController extends Controller
{
 
    /**
     * @param Request $req
     * @return view 
     */
    public function register(Request $req)
    {
        $rules = array(
            'fullname' => 'required|max:80',
            'date'     => 'date_format:Y-m-d',
            'username' => 'required|max:255|unique',
            'email'    => 'email',
            'password' => 'required|max:255|confirmed'
        );

        $validatorMessagesCzech = array(
            'username.required'  => "Vyplňte, prosím, uživatelské jméno.", 
            'password.required'  => "Vyplňte, prosím, heslo.",
            'fullname.required'  => "Vyplňte, prosím, své jméno.",
            'date.date_format'   => "Toto není platný formát data.",
            'email.email'        => "Toto není platný formát e-mailu.",
            'password.confirmed' => "Hesla se neshodují."
        ); 
    
        $validator = Validator::make($req->all(), $rules, $validatorMessagesCzech);

        if($validator->fails()) {
            return redirect('login')->withErrors($validator)->with('registerValid' false);   
        }
        
        return redirect('home');
    }
}
