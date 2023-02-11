<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\RegistrationClinic;
use App\Http\Requests\StoreRegistrationClinicRequest;
use App\Http\Requests\UpdateRegistrationClinicRequest;
use App\Models\Clinic;
use App\Models\Doctor;
use Carbon\Carbon;
use Illuminate\Http\Request;

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

    public function checkData(Request $request)
    {
        $patient = Patient::where('pt_norm', $request->norm)->first();
        return response()->json([
            'pat_name' => $patient->pt_name,
            'pat_address' => $patient->pt_address,
            'pat_age' => Carbon::now()->diffInYears($patient->pt_dateofbirth),
            'pat_phone' => $patient->pt_phone,
            'pat_family' => $patient->patient_family->ptf_name
        ]);
    }
}
