<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\User;
use Hash;
class loginController extends Controller
{
    


      public function login(Request $request){

  

           $email= $request->input('email');
            $password= $request->input('password');

        
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
                $id= Auth::id();

                $user = User::find($id);

            // Creating a token without scopes...
            $token = $user->createToken('Token Name')->accessToken;

            return $token;
                }

             else{
                $password = 'house1234';
                return "problem";
             }   

        


    }

}