<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
use App\Models\Admin; 


class AdminController extends Controller
{
    function login(Request $req){
        $validate = $req->validate([
            'name' => 'required|string|min:4',
            'password' => 'required|string|min:5',
        ]);

      
            $admin = Admin::where('name', $req->input('name'))
                            ->where('password', $req->input('password'))
                            ->first();
            // $admin = Admin::where([
            //     'name' => $req->name,
            //     'password' => $req->password,
            // ])->first();

            if (!$admin) {
                // custome error validation
                $validate = $req->validate(
                    ['user'=>'required'] , [
                        "user.required"=>"User Does Not Exist Please add Valid Name and Password"
                    ]
                );
            } else {
                Session::put('admin', $admin);
                return redirect('admin-dashboard');
            }
    }

    function dashboard(Request $req){
            $admin=  Session::get('admin');
        return view('Layout.AdminDashboard' , ['admin' => $admin]);
    
    }
    function category(Request $req){
            $admin=  Session::get('admin');
        return view('Layout.category' , ['admin' => $admin]);
    
    }
}
