<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInfo;
use App\Models\Copyright;
use App\Models\Customers;
use App\Models\FooterAbout;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;
use App\Models\SocialLink;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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
       // $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $postCount = Post::count();
        $userCount = User::count();
        $customerCount = User::where('type','customer')->count();
        $productsCount = Product::count();
        $orderCount = Order::count();
        $orders =  DB::table('orders')
        ->join('products', 'orders.product_id', '=', 'products.id')
        ->join('users', 'orders.user_id', '=', 'users.id')
        ->select('products.*', 'orders.*', 'users.first_name','users.last_name','users.email')
        ->orderBy('orders.id', 'desc')
        ->take(10)
        ->get();

//Customer dAta
        $userId = Auth::user()->id;
        $myOrder = Order::where('user_id', $userId)->get();
        $customerorders =  DB::table('orders')
            ->join('products', 'orders.product_id', 'products.id')
            ->select('products.*', 'orders.*')
            ->where('orders.user_id', $userId)
            ->get();














        return view('dashboard', compact('postCount', 'userCount', 'customerCount', 'productsCount', 'orderCount', 'orders','customerorders'));
    }
    public function dashboard()
    {
        return view('home');
    }
}
