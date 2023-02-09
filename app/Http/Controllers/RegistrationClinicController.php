<?php

namespace App\Http\Controllers;

use App\Models\RegistrationClinic;
use App\Http\Requests\StoreRegistrationClinicRequest;
use App\Http\Requests\UpdateRegistrationClinicRequest;

class RegistrationClinicController extends Controller
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
     * @param  \App\Http\Requests\StoreRegistrationClinicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegistrationClinicRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistrationClinic  $registrationClinic
     * @return \Illuminate\Http\Response
     */
    public function show(RegistrationClinic $registrationClinic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegistrationClinic  $registrationClinic
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistrationClinic $registrationClinic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegistrationClinicRequest  $request
     * @param  \App\Models\RegistrationClinic  $registrationClinic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegistrationClinicRequest $request, RegistrationClinic $registrationClinic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistrationClinic  $registrationClinic
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistrationClinic $registrationClinic)
    {
        //
    }
}
