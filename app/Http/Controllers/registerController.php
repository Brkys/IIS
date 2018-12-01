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
            'username' => 'required|max:255',
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
        
        $fullName = $req->input('fullname');
        $validatorFullName = Validator::make($req->only('fullname'), $rules, $validatorMessagesCzech);
        if($validatorFullName->fails()) {
            $fullname = '';
        }

        $date = $req->input('date');
        if($date != ''){
            $validatorDate = Validator::make($req->only('date'), $rules, $validatorMessagesCzech);
            if($validatorDate->fails()) {
                $date = '';
            }
        }

        $username = $req->input('username');
        $validatorUsername = Validator::make($req->only('username'), $rules, $validatorMessagesCzech);
        if($validatorUsername->fails()) {
            $username = '';
        }

        $password = $req->input('password');
        $validatorPwd = Validator::make($req->only('password'), $rules, $validatorMessagesCzech);
        if($validatorPwd->fails()) {
            $password = '';
        }

        $email = $req->input('email');
        if($email != ''){
            $validatorEmail = Validator::make($req->only('email'), $rules, $validatorMessagesCzech);
            if($validatorEmail->fails()) {
                $email = '';
            }
        }

        $validationResult = array(
            'fullname' => $fullName,
            'username' => $username, 
            'date'     => $date,
            'password' => $password,
            'email'    => $email);
        
        if($username == ''){
            $validationResult['fullname'] = $username;
        }
        $validatorFinal = Validator::make($req->all(), $rules, $validatorMessagesCzech);
        if($validatorFinal->fails()) {
            return redirect('home')->withErrors($validatorFinal)->with('registerNotValid', true)->with('registerInput', $validationResult);
        }
        
        return redirect('home');
    }
}
