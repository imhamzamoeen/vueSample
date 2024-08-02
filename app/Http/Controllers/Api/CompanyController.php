<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyCreateRequest;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use App\Models\User;
use App\Services\JsonResponseService;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return JsonResponseService::JsonSuccess('Companies fetched Successfull',Company::all());
        return CompanyResource::collection(Company::all());    //company resource ko hm sara data pass krty ta k koi data k andar modification krni tu us mai krien 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyCreateRequest $request)
    {
        //
       $company= Company::create($request->validated());
            return new CompanyResource($company);   /// this is for sending single object
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param \App\Models\Company $model
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
        return new CompanyResource($company);   /// this is for sending single object
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *  @param \App\Models\Company $model
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyCreateRequest $request, Company $company)
    {       
        //
        $company->update($request->validated);
        return new CompanyResource($company);   /// this is for sending single object
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return response()->noContent();
    }
}
