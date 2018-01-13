<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
    public function pageClient()
    {
        return view("client");
    }
    public function pageClient1()
    {
        return view("client1");
    }
    public function pageClient2()
    {
        return view("client2");
    }
    public function pageClient3()
    {
        return view("client3");
    }
    public function pageWeb()
    {
        return view("web");
    }
    public function pageBrand()
    {
        return view("branding");
    }
}
