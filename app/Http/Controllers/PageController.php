<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserUpdateRequest;

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

    public function edit($id){
        $user = User::find($id);
        return view('admin.users.edit',compact('user'));
    }
    public function update(UserUpdateRequest $request,$id){


        $data = $request->validated();
        $user = User::find($id) ;

        if (! Hash::check($data["old_password"], $user->password) ) {
            return back()->withInput(["name","email","phone","role","dob"])->with("error","Incorrect Old Password!") ;
        }

        if ( isset($data["password"])) {
            $data["password"] =   Hash::make( $data["password"]);
            $user->password =  $data["password"];
        }


            $user->name = $data["name"] ;
            $user->email = $data["email"] ;

            if($user->save()){

            return back()->with("success","User profile updated");
            }}
}
