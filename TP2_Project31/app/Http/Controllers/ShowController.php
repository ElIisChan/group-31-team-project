<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ShowController extends Controller
{
    public function show() {

        $data=product::all();
        return view('category1', compact('data'));
    }
}
