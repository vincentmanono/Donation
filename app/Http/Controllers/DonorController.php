<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Http\Requests\StoreDonorRequest;
use App\Http\Requests\UpdateDonorRequest;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donors = User::where('is_admin',0)->withCount('products')->get() ;
        return view('admin.donors.index',compact('donors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDonorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDonorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function show(User $donor)
    {
        return view('admin.donors.show',compact('donor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function edit(User $donor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDonorRequest  $request
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDonorRequest $request, User $donor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $donor)
    {
        //
    }
}
