<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\User;
use App\Notifications\RequestDonationNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str ;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products =[];

        if ( Auth::user()->isAdmin() ) {
            $products =  Product::latest()->get();
        } else {
            # code...
            $products =   Auth::user()->products ;
        }


        return view('admin.products.index',compact('products')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.products.create") ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
       $product =  $request->validated() ;
       return $product ;
       $product['user_id'] = Auth::user()->id ;

       if (file_exists($request->file('image'))) {
        // dd($request);
         // Get filename with extension
         $filenameWithExt = $request->file('image')->getClientOriginalName();



         // Get extension
         $extension = $request->file('image')->getClientOriginalExtension();

         // Create new filename
         $filenameToStore = (string) Str::uuid() . '_' . time() . '.' . $extension;

         // Uplaod image

         $path = $request->file('image')->storeAs('public/products', $filenameToStore);
         $avatar  = $filenameToStore;
        $product['image'] = $avatar ;

     }

       Product::create($product) ;

       return redirect()->route('products.index')->with('success',"product added");


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $this->isAllowedToPerform($product);
        return view('admin.products.show',compact('product')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
       $this->isAllowedToPerform($product);
        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $this->isAllowedToPerform($product);
        $data =  $request->validated() ;

        if (file_exists($request->file('image'))) {
         // dd($request);
          // Get filename with extension
          $filenameWithExt = $request->file('image')->getClientOriginalName();

          // Get just the filename
          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

          // Get extension
          $extension = $request->file('image')->getClientOriginalExtension();

          // Create new filename
          $filenameToStore = $filename . '_' . time() . '.' . $extension;

          // Uplaod image

          $path = $request->file('image')->storeAs('public/products', $filenameToStore);
          $avatar  = $filenameToStore;
         $data['image'] = $avatar ;

      }

        $product->update($data) ;

        return back()->with('success','product updated') ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->isAllowedToPerform($product);
        $product->delete();
        return redirect()->route('products.index') ->with('success','product deleted') ;

    }

    public function storeImage( $request,$product)
    {
        # code...
        if (file_exists($request->file('image'))) {
            // dd($request);
             // Get filename with extension
             $filenameWithExt = $request->file('image')->getClientOriginalName();

             // Get just the filename
             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

             // Get extension
             $extension = $request->file('image')->getClientOriginalExtension();

             // Create new filename
             $filenameToStore = $filename . '_' . time() . '.' . $extension;

             // Uplaod image
             $path = $request->file('image')->storeAs('public/products', $filenameToStore);
             $avatar  = $filenameToStore;
            $product['image'] = $avatar ;
         }
    }

    public function acceptProduct(Product $product, Request $request)
    {

        # Accept product donated
        $product->update([
            'status' => trim( $request->status)
        ]);

        Session::flash('success',"Product accepted.");
        return back();
    }

    public function acceptedProducts()
    {
        # code...

        if ( Auth::user()->is_admin ) {
            # code...
            $products  = Product::where('status','accepted')->get() ;
        } else {
            # code...
            $products  = Auth::user()->products ;
        }

        return view('admin.collect.index',compact('products') ) ;
    }

    public function showRequestDonationView()
    {
        $admin = User::where('is_admin',1)->first();
        if (! $admin) {
            # code...
            return redirect()->route('home')->with('error',"You can not send email now , please try later") ;

        }
        return view('admin.products.requestdonation',compact('admin')) ;

    }


    public function requestDonation(Request $request)
    {
        # send email to request donation


        try {
            //code...
            // mail($request->email,$request->subject,$request->message);
            Notification::send(Auth::user(),new RequestDonationNotification($request->all())) ;
            Session::flash('success',"Request send.");
        } catch (\Throwable $th) {
            throw $th;
            // Session::flash('error',$th->getMessage());

        }


        return back() ;

    }

    public function isAllowedToPerform(Product $product)
    {
        # code...
        $check = ! Auth::user()->isAdmin() && $product->user_id != Auth::user()->id ;
        abort_if($check,403,"YOU ARE NOT ALLOWED TO VIEW THIS RESOURCE");
    }


}
