<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:customer')->except('logout');
    }

    public function index()
    {
        return view('customer.signup');
    }
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $user = User::create([
            'username' => trim($request->input('username')),
            'first_name' => trim($request->input('first_name')),
            'last_name' => trim($request->input('last_name')),
            'email' => strtolower($request->input('email')),
            'password' => Hash::make($request->input('password')),
            'password_plain_text' => $request->input('password'),
            'type' => 'customer',
            'status' => '0',
        ]);
        //dd($user);
        session()->flash('message', 'Your account is created');

        return redirect()->route('login');
    }
    public function signin()
    {
        return view('customer.signin');
    }
    public function process_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        $customers = Customers::where('email', $request->email)->where('password', $request->password)->first();

        if (Auth::attempt($credentials)) {
            return redirect()->route('home')->withSuccess('Signed in');
        }
        return redirect()->back()->with('message', 'Email and password are incorrect');
        // return redirect("login")->withSuccess('Login details are not valid');
    }

    public function customDashboard()
    {
        return view('customer.dashboard');
    }
    public function signout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('login');
    }
}
