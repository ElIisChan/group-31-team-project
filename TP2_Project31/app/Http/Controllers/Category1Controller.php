<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 

class Category1Controller extends Controller
{
    //
    public function index()
    {
        
        return view('category1');    
    }
}
