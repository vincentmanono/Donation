<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $products=Product::latest()->paginate(3);
        return view('client.index',compact('products'));
    }
    public function blog(){
        return view('client.blog');
    }
    public function about(){
        return view('client.about');
    }
    public function services(){
        return view('client.services');
    }
}
