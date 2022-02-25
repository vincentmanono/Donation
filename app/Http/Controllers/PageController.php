<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('client.index');
    }
    public function blog(){
        return view('client.blog');
    }
    public function contact(){
        return view('client.contact');
    }
    public function about(){
        return view('client.about');
    }
    public function services(){
        return view('client.services');
    }
}
