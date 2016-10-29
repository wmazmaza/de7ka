<?php

namespace App\Http\Controllers;

use App\Vedios;
use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.add_video');
    }

    public function save(Request $request){
        $v = new Vedios();
        $v->title = $request->title;
        $v->link = $request->link;
        $v->description = $request->description;
        $v->save();
        return redirect()->to('/');
    }
}
