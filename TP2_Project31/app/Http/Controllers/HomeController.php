<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Basket;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function addbasket(Request $request , $id) 
    {
        if(Auth::id()) 
        {
            $user=auth()->user();
            $product=product::find($id);

            $basket=new basket;
            $basket->name=$user->name;

            $basket->product_name=$product->product_name;
            $basket->product_description=$product->product_description;
            $basket->photo=$product->photo;
            $basket->quantity=$request->quantity;
            $basket->price=$product->price;

            $basket->save();



            return redirect()->back()->with('message', 'Product Added to Basket');

        }

        else 
        {
            return redirect('login');
        }
    }

    public function showbasket() 
    {
        $user=auth()->user();

        $basket=basket::where('name', $user->name)->get();

        $count=basket::where('name', $user->name)->count();

        return view('basket', compact('count', 'basket'));
    }


    public function deletebasket($id) 
    {

        $data=basket::find($id);
        $data->delete();

        return redirect()->back();
    }
}
