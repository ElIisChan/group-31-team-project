<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Basket;
use App\Models\Product;
use App\Models\Order;

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

    public function confirmorder(Request $request) 
    {

        $user=auth()->user();

        $name=$user->name;
        $email=$user->email;

        foreach($request->productname as $key=>$productname) 
        {

            $order=new order;

            $order->product_name=$request->productname[$key];
            $order->product_description=$request->productdescription[$key];
            $order->quantity=$request->quantity[$key];
            $order->price=$request->price[$key];

            $order->name=$name;
            $order->email=$email;

            $order->status='pending';

            $order->save();

            

        }

        DB::table('baskets')->where('name', $name)->delete();

        return redirect()->back()->with('message', 'Order Placed');;


    }

    public function showorder() 
    {
        $user=auth()->user();

        $history=order::where('name', $user->name)->get();

        return view('showorder', compact('history'));

    }

    public function deleteorder($id) 
    {

        $data1=order::find($id);
        $data1->delete();

        return redirect()->back();
    }
}
