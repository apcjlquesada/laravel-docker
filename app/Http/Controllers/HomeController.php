<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {   
        //$allCategories = ['Category 1', 'Category 2', 'Category 3']; 
        //$allCategories = DB::table('categories')->get();
        $allCategories = Category::all();          

        return view('home', ['categories' => $allCategories]); 
    }
}
