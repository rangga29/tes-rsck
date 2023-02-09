<?php

namespace App\Http\Controllers;

use App\Models\PatientFamily;
use App\Http\Requests\StorePatientFamilyRequest;
use App\Http\Requests\UpdatePatientFamilyRequest;

class PatientFamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePatientFamilyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientFamilyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatientFamily  $patientFamily
     * @return \Illuminate\Http\Response
     */
    public function show(PatientFamily $patientFamily)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatientFamily  $patientFamily
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientFamily $patientFamily)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientFamilyRequest  $request
     * @param  \App\Models\PatientFamily  $patientFamily
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientFamilyRequest $request, PatientFamily $patientFamily)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientFamily  $patientFamily
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientFamily $patientFamily)
    {
        //
    }
}
