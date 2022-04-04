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

    // User Crud
    public function users(){
        $users=User::all();

        return view('admin.users.index',compact('users'));
    }
    public function edit($id){
        $user = User::find($id);
        return view('admin.users.edit',compact('user'));
    }
    public function update(UserUpdateRequest $request,$id){


        $data = $request->validated();
        $user = User::find($id) ;

        if (! Hash::check($data["old_password"], $user->password) ) {
            return back()->withInput(["name","email","is_admin"])->with("error","Incorrect Old Password!") ;
        }

        if ( isset($data["password"])) {
            $data["password"] =   Hash::make( $data["password"]);
            $user->password =  $data["password"];
        }
            $user->name = $data["name"] ;
            $user->email = $data["email"] ;
            $user->is_admin=$data["is_admin"];

            if($user->save()){

            return back()->with("success","User profile updated");
            }
        }

    public function destroy($id){

            $user=User::where('id',$id);

            $user->delete();

            if ($user) {
                return redirect()->route('user.index')->with('success','You have successully deleted this user');
            } else {
                return back()->with('error','An error occured, please contact the administrator');
            }




    }
}



