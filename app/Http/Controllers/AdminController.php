<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin; 

class AdminController extends Controller
{
    function login(Request $req){
        $validate = $req->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);
        if($validate){
            $admin = Admin::where('name', $req->input('name'))
                            ->where('password', $req->input('password'))
                            ->first();
            // // return $req->input('name') . " logged in successfully";
            // $admin = Admin::where([
            //     'name' => $req->name,
            //     'password' => $req->password,
            // ])->first();
            if($admin){
            
            return view('Auth.AdminDashboard', [
                'admin' => $admin,
            ]);
        }else{
            return "Invalid credentials";
        }
    }
        
    }
}
