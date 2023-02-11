<?php

namespace App\Http\Controllers;

use App\Exports\PatientExport;
use App\Models\Patient;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientFamilyRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\PatientFamily;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', [
            'title' => 'Data Pasien',
            'print' => 'yes',
            'active' => 'patients',
            'patients' => $patients
        ]);
    }

    public function create()
    {
        return view('patients.create', [
            'title' => 'Tambah Data Pasien',
            'print' => 'no',
            'active' => 'patients'
        ]);
    }

    public function store(StorePatientRequest $request)
    {
        $patients = Patient::count();
        $validateData = $request->validated();
        Patient::create([
            'pt_norm' => Str::padLeft($patients + 1, 8, '0'),
            'pt_name' => $validateData['pt_name'],
            'pt_address' => $validateData['pt_address'],
            'pt_kelurahan' => $validateData['pt_kelurahan'],
            'pt_kecamatan' => $validateData['pt_kecamatan'],
            'pt_city' => $validateData['pt_city'],
            'pt_hometown' => $validateData['pt_hometown'],
            'pt_dateofbirth' => $validateData['pt_dateofbirth'],
            'pt_religion' => $validateData['pt_religion'],
            'pt_blood_type' => $validateData['pt_blood_type'],
            'pt_phone' => $validateData['pt_phone'],
            'pt_status' => $validateData['pt_status'],
            'pt_education' => $validateData['pt_education'],
            'pt_profession' => $validateData['pt_profession']
        ]);
        $getid = Patient::where('pt_name', $validateData['pt_name'])->first();
        PatientFamily::create([
            'patient_id' => $getid->id,
            'ptf_name' => $validateData['ptf_name'],
            'ptf_slug' => SlugService::createSlug(PatientFamily::class, 'ptf_slug', $validateData['ptf_name']),
            'ptf_relation' => $validateData['ptf_relation'],
            'ptf_address' => $validateData['ptf_address'],
            'ptf_kelurahan' => $validateData['ptf_kelurahan'],
            'ptf_kecamatan' => $validateData['ptf_kecamatan'],
            'ptf_city' => $validateData['ptf_city'],
            'ptf_phone' => $validateData['ptf_phone'],
            'ptf_profession' => $validateData['ptf_profession']
        ]);

        return to_route('patients.index')->withSuccess('Data Pasien Berhasil Ditambahkan');
    }

    public function show(Patient $patient)
    {
        return view('patients.show', [
            'title' => 'Data Pasien - ' . $patient->pt_name,
            'print' => 'no',
            'active' => 'patients',
            'patient' => $patient,
            'patient_fam' => PatientFamily::where('patient_id', $patient->id)->first()
        ]);
    }

    public function edit(Patient $patient)
    {
        return view('patients.edit', [
            'title' => 'Ubah Data Pasien - ' . $patient->pt_name,
            'print' => 'no',
            'active' => 'patients',
            'patient' => $patient
        ]);
    }

    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        $validateData = $request->validated();
        $patient->update($validateData);
        return to_route('patients.index')->withSuccess('Data Pasien Berhasil Diubah');
    }

    public function editFamily(Patient $patient)
    {
        return view('patients.edit-family', [
            'title' => 'Ubah Data Keluarga Pasien - ' . $patient->pt_name,
            'print' => 'no',
            'active' => 'patients',
            'patient' => $patient,
            'patient_fam' => PatientFamily::where('patient_id', $patient->id)->first()
        ]);
    }

    public function updateFamily(UpdatePatientFamilyRequest $request, Patient $patient)
    {
        $validateData = $request->validated();
        $family = PatientFamily::where('patient_id', $patient->id)->first();
        $family->update($validateData);
        return to_route('patients.index')->withSuccess('Data Keluarga Pasien Berhasil Diubah');
    }

    public function destroy(Patient $patient)
    {
        $family = PatientFamily::where('patient_id', $patient->id)->first();
        $patient->delete();
        $family->delete();
        return to_route('patients.index')->withSuccess('Data Pasien Berhasil Dihapus');
    }

    public function deleted()
    {
        return view('patients.deleted', [
            'title' => 'Data Pasien Dihapus',
            'print' => 'no',
            'active' => 'patients',
            'patients' => Patient::onlyTrashed()->orderBy('deleted_at', 'desc')->get()
        ]);
    }

    public function restore($code)
    {
        Patient::onlyTrashed()->where('pt_norm', $code)->restore();
        $patient = Patient::where('pt_norm', $code)->first();
        PatientFamily::onlyTrashed()->where('patient_id', $patient->id)->restore();
        return to_route('patients.index')->withSuccess('Data Pasien Berhasil Dikembalikan');
    }

    public function permanentDelete($code)
    {
        $patient = Patient::onlyTrashed()->where('pt_norm', $code)->first();
        PatientFamily::onlyTrashed()->where('patient_id', $patient->id)->forceDelete();
        $patient->forceDelete();
        return to_route('patients.index')->withSuccess('Data Pasien Berhasil Dihapus Permanen');
    }

    public function search(Request $request)
    {
        $response = Http::post('https://registrasi.rscahyakawaluyan.com/wsregonline/rest/restapi_ceknamapasien.php', [
            'btnCekNamaPasien' => 'btnCekNamaPasien',
            'NOMR' => $request->search
        ]);
        $tes = $response->getBody()->getContents();
        $array = json_decode($tes, true);

        if (!$array) {
            return back()->withErrors('Data Pasien Tidak Ditemukan');
        }

        $patient = $array['response'];

        return view('patients.show-api', [
            'title' => 'Data Pasien - ' . $patient['NAMA'],
            'print' => 'no',
            'active' => 'patients',
            'patient' => $patient,
        ]);
    }

    public function reportExcel()
    {
        return view('patients.report-excel', [
            'title' => 'Laporan Excel Data Pasien',
            'print' => 'no',
            'active' => 'patients'
        ]);
    }

    public function printExcel(Request $request, $type)
    {
        if ($request->all_column == '1') {
            $norm = '1';
            $name = '1';
            $address = '1';
            $kelurahan = '1';
            $kecamatan = '1';
            $city = '1';
            $hometown = '1';
            $dateofbirth = '1';
            $religion = '1';
            $bloodtype = '1';
            $phone = '1';
            $status = '1';
            $education = '1';
            $profession = '1';
            $famname = '1';
            $famstatus = '1';
            $famaddress = '1';
            $famkelurahan = '1';
            $famkecamatan = '1';
            $famcity = '1';
            $famphone = '1';
            $famprofession = '1';
            $created = '1';
        } else {
            $request->norm ? $norm = '1' : $norm = '0';
            $request->name ? $name = '1' : $name = '0';
            $request->address ? $address = '1' : $address = '0';
            $request->kelurahan ? $kelurahan = '1' : $kelurahan = '0';
            $request->kecamatan ? $kecamatan = '1' : $kecamatan = '0';
            $request->city ? $city = '1' : $city = '0';
            $request->hometown ? $hometown = '1' : $hometown = '0';
            $request->dateofbirth ? $dateofbirth = '1' : $dateofbirth = '0';
            $request->religion ? $religion = '1' : $religion = '0';
            $request->bloodtype ? $bloodtype = '1' : $bloodtype = '0';
            $request->phone ? $phone = '1' : $phone = '0';
            $request->status ? $status = '1' : $status = '0';
            $request->education ? $education = '1' : $education = '0';
            $request->profession ? $profession = '1' : $profession = '0';
            $request->famname ? $famname = '1' : $famname = '0';
            $request->famstatus ? $famstatus = '1' : $famstatus = '0';
            $request->famaddress ? $famaddress = '1' : $famaddress = '0';
            $request->famkelurahan ? $famkelurahan = '1' : $famkelurahan = '0';
            $request->famkecamatan ? $famkecamatan = '1' : $famkecamatan = '0';
            $request->famcity ? $famcity = '1' : $famcity = '0';
            $request->famphone ? $famphone = '1' : $famphone = '0';
            $request->famprofession ? $famprofession = '1' : $famprofession = '0';
            $request->created ? $created = '1' : $created = '0';
        }

        if ($type == 'all') {
            $data = Patient::orderBy('pt_norm', 'asc')->get();
        } else {
            $data = Patient::whereBetween('created_at', [$request->firstDate . ' 00:00:00', $request->lastDate . ' 23:59:59'])->orderBy('pt_norm', 'asc')->get();
        }

        if ($data->isEmpty()) {
            return back()->withWarning('Data Yang Diminta Tidak Ditemukan');
        }

        $todayDate = Carbon::now()->format('Ymd');
        if ($type == 'all') {
            $firstDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->first()->created_at)->isoFormat('DD MMMM Y');
            $lastDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->last()->created_at)->isoFormat('DD MMMM Y');
        } else {
            $firstDate = Carbon::createFromFormat('Y-m-d', $request->firstDate)->isoFormat('DD MMMM Y');
            $lastDate = Carbon::createFromFormat('Y-m-d', $request->lastDate)->isoFormat('DD MMMM Y');
        }

        $file_name = '[' . $todayDate . '] Laporan Data Pasien (' . $firstDate . ' - ' . $lastDate . ').xlsx';

        return Excel::download(new PatientExport(
            $data,
            $norm,
            $name,
            $address,
            $kelurahan,
            $kecamatan,
            $city,
            $hometown,
            $dateofbirth,
            $religion,
            $bloodtype,
            $phone,
            $status,
            $education,
            $profession,
            $famname,
            $famstatus,
            $famaddress,
            $famkelurahan,
            $famkecamatan,
            $famcity,
            $famphone,
            $famprofession,
            $created,
        ), $file_name);
    }
}
