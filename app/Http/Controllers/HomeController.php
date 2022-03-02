<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

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
        $donorsCount = User::where('is_admin',0)->count() ;
        // dd($donorsCount) ;
        $lastMonth = Carbon::now()->subMonth() ;
        $newDonation = Product::where('created_at','>=', $lastMonth )->count() ;
        $latestDonors = User::where('is_admin',0)->latest()->take(4)->get() ;
        $products = Product::where('user_id',Auth::user()->id)->latest()->take(8)->get() ;
        return view('admin.index',compact('lastMonth','newDonation','donorsCount','latestDonors','products'));
    }
    
}
