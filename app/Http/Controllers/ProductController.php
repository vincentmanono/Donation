<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
        
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
       $product['user_id'] = Auth::user()->id ;

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
        //
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


}
