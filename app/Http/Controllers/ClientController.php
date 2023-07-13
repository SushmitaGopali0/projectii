<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view ('client.index');
    }

    public function form(){
        return view('client.form');
    }
    public function about(){
        return view('client.about');
    }
    public function contact(){
        return view('client.contact');
    }


}
