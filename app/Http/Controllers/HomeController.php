<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Argument

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
        $arguments = Argument::all();
        return view('home', ['arguments' => $arguments]);
    }
}
