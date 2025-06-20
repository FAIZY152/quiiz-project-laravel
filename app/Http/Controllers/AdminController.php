<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function login(Request $req){
        $validate = $req->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);
        if($validate){
            
            // return $req->input('name') . " logged in successfully";
            return $req->input();
        }else{
            return "Invalid credentials";
        }
        
        
    }
}
