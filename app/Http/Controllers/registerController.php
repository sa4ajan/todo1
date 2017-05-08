<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class registerController extends Controller
{
   
   

    public function store(Request $request){


     
        //get all the value from the input
        $input = $request->all();

        
        //get the instance of the registration
        $user = new User;    

        //Save all the input on database 
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = Hash::make($input['password']);
        $user->save();


    }
    
    
    
  


    }
 

