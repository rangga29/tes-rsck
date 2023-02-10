<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClinicRequest;
use App\Http\Requests\UpdateClinicRequest;
use App\Models\Clinic;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ClinicController extends Controller
{
    public function index()
    {
        $clinics = Clinic::all();
        return view('clinics.index', [
            'title' => 'Data Klinik',
            'active' => 'clinics',
            'clinics' => $clinics
        ]);
    }

    public function store(StoreClinicRequest $request)
    {
        $validateData = $request->validated();
        $validateData['cl_slug'] = SlugService::createSlug(Clinic::class, 'cl_slug', $validateData['cl_name']);

        Clinic::create($validateData);
        return to_route('clinics.index')->withSuccess('Data Klinik Berhasil Ditambahkan');
    }

    public function edit($slug)
    {
        $data = Clinic::where('cl_slug', $slug)->first();
        return response()->json($data);
    }

    public function update(UpdateClinicRequest $request, Clinic $clinic)
    {
        $validateData = $request->validated();
        if ($validateData['cl_name'] != $clinic->cl_name) {
            $validateData['cl_slug'] = SlugService::createSlug(Clinic::class, 'cl_slug', $validateData['cl_name']);
        }

        $clinic->update($validateData);
        return to_route('clinics.index')->withSuccess('Data Klinik Berhasil Diubah');
    }

    public function destroy(Clinic $clinic)
    {
        $clinic->delete();
        return to_route('clinics.index')->withSuccess('Data Klinik Berhasil Dihapus');
    }

    public function deleted()
    {
        return view('clinics.deleted', [
            'title' => 'Data Klinik Dihapus',
            'active' => 'clinics',
            'clinics' => Clinic::onlyTrashed()->orderBy('deleted_at', 'desc')->get()
        ]);
    }

    public function restore($slug)
    {
        Clinic::onlyTrashed()->where('cl_slug', $slug)->restore();
        return to_route('clinics.index')->withSuccess('Data Klinik Berhasil Dikembalikan');
    }

    public function permanentDelete($slug)
    {
        Clinic::onlyTrashed()->where('cl_slug', $slug)->forceDelete();
        return to_route('clinics.index')->withSuccess('Data Klinik Berhasil Dihapus Permanen');
    }
}
