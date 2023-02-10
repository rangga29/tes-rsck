<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', [
            'title' => 'Data Dokter',
            'print' => 'no',
            'active' => 'doctors',
            'doctors' => $doctors
        ]);
    }

    public function store(StoreDoctorRequest $request)
    {
        $validateData = $request->validated();
        $validateData['cl_slug'] = SlugService::createSlug(Doctor::class, 'dr_slug', $validateData['dr_name']);

        Doctor::create($validateData);
        return to_route('doctors.index')->withSuccess('Data Dokter Berhasil Ditambahkan');
    }

    public function edit($slug)
    {
        $data = Doctor::where('dr_slug', $slug)->first();
        return response()->json($data);
    }

    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        $validateData = $request->validated();
        if($validateData['dr_name'] != $doctor->dr_name) {
            $validateData['dr_slug'] = SlugService::createSlug(Doctor::class, 'dr_slug', $validateData['dr_name']);
        }

        $doctor->update($validateData);
        return to_route('doctors.index')->withSuccess('Data Dokter Berhasil Diubah');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return to_route('doctors.index')->withSuccess('Data Dokter Berhasil Dihapus');
    }

    public function deleted()
    {
        return view('doctors.deleted', [
            'title' => 'Data Dokter Dihapus',
            'print' => 'no',
            'active' => 'doctors',
            'doctors' => Doctor::onlyTrashed()->orderBy('deleted_at', 'desc')->get()
        ]);
    }

    public function restore($slug)
    {
        Doctor::onlyTrashed()->where('dr_slug', $slug)->restore();
        return to_route('doctors.index')->withSuccess('Data Dokter Berhasil Dikembalikan');
    }

    public function permanentDelete($slug)
    {
        Doctor::onlyTrashed()->where('dr_slug', $slug)->forceDelete();
        return to_route('doctors.index')->withSuccess('Data Dokter Berhasil Dihapus Permanen');
    }
}
