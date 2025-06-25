<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
use App\Models\Category; 

class CategoryController extends Controller
{
    function AddCategory (Request $req) {
        $validate = $req->validate([
            'cname' => 'required|string|min:4',
        ]);

        $admin =  

        // Assuming you have a Category model to handle the database
        $category = new Category();
        $category->name = $req->input('cname');
        $category->save();

        return $req;
            
    }
}
