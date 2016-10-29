<?php

namespace App\Http\Controllers;

use App\Vedios;
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
     //   $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Vedios::paginate(15);
        return view('home')
            ->with('all',$all);
    }
}
