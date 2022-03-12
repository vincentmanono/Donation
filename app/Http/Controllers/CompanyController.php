<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(!Auth::user()->isAdmin(),"You are not allowed to view that route" );

        $companies = Company::latest()->get();
        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        $data = $request->validated();
        $user = Auth::user();
        if ($user->company != null || !empty($user->company)) {
            # code...
            return redirect()->route('companies.show', $user->company)->with('error', "You already have a company");
        }

        if (file_exists($request->file('document'))) {
            // dd($request);
            // Get filename with extension
            $filenameWithExt = $request->file('document')->getClientOriginalName();



            // Get extension
            $extension = $request->file('document')->getClientOriginalExtension();

            // Create new filename
            $filenameToStore = (string) Str::uuid() . '_' . time() . '.' . $extension;

            // Uplaod image

            $path = $request->file('document')->storeAs('public/companies', $filenameToStore);
            $avatar  = $filenameToStore;
            $data['certificate'] = $avatar;
        }





        $company = $user->company()->create([
            'name' => $data['company'],
            'certificate' => $data['certificate'],
            'address' => $data['address'],
            'email' => $data['email'],
            'url' => $data['url'],
            'location' => $data['location'],
            'services' => $data['services']

        ]);

        return redirect()->route('companies.show', $company)->with('Company Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {

        abort_if(!Auth::user()->isAdmin() && $company->user_id !=Auth::user()->id,"You are not allowed to view that route" );
        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyRequest  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
