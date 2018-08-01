<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Auth;

class HomeController extends Controller
{

    public function dashboard()
    {
    	return view('admin.dashboard');
    }
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout.home');
    }
    public function logout()
    {
        Auth::logout();
        
        return redirect('/');
    }
}
