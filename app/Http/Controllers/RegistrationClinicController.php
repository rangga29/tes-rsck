<?php

namespace App\Http\Controllers;

use App\Models\RegistrationClinic;
use App\Http\Requests\StoreRegistrationClinicRequest;
use App\Http\Requests\UpdateRegistrationClinicRequest;
use App\Models\Clinic;
use App\Models\Doctor;

class RegistrationClinicController extends Controller
{
    public function index()
    {
        $polyclinics = RegistrationClinic::all();
        return view('polyclinics.index', [
            'title' => 'Data Registrasi Klinik',
            'print' => 'yes',
            'active' => 'polyclinics',
            'polyclinics' => $polyclinics
        ]);
    }

    public function create()
    {
        return view('polyclinics.create', [
            'title' => 'Tambah Data Registrasi Klinik',
            'print' => 'no',
            'active' => 'polyclinics',
            'clinics' => Clinic::orderBy('cl_name', 'asc')->get(),
            'doctors' => Doctor::orderBy('dr_name', 'asc')->get()
        ]);
    }

    public function store(StoreRegistrationClinicRequest $request)
    {
        //
    }

    public function show(RegistrationClinic $registrationClinic)
    {
        //
    }

    public function edit(RegistrationClinic $registrationClinic)
    {
        //
    }

    public function update(UpdateRegistrationClinicRequest $request, RegistrationClinic $registrationClinic)
    {
        //
    }

    public function destroy(RegistrationClinic $registrationClinic)
    {
        //
    }
}
