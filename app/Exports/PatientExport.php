<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PatientExport implements FromView, ShouldAutoSize, WithStyles, WithStrictNullComparison
{
    protected $data;
    protected $norm;
    protected $name;
    protected $address;
    protected $kelurahan;
    protected $kecamatan;
    protected $city;
    protected $hometown;
    protected $dateofbirth;
    protected $religion;
    protected $blood_type;
    protected $phone;
    protected $status;
    protected $education;
    protected $profession;
    protected $famname;
    protected $famrelation;
    protected $famaddress;
    protected $famkelurahan;
    protected $famkecamatan;
    protected $famcity;
    protected $famphone;
    protected $famprofession;
    protected $created;

    function __construct($data, $norm, $name, $address, $kelurahan, $kecamatan, $city, $hometown, $dateofbirth, $religion, $blood_type, $phone, $status, $education, $profession, $famname, $famrelation, $famaddress, $famkelurahan, $famkecamatan, $famcity, $famphone, $famprofession, $created)
    {
        $this->data = $data;
        $this->norm = $norm;
        $this->name = $name;
        $this->address = $address;
        $this->kelurahan = $kelurahan;
        $this->kecamatan = $kecamatan;
        $this->city = $city;
        $this->hometown = $hometown;
        $this->dateofbirth = $dateofbirth;
        $this->religion = $religion;
        $this->blood_type = $blood_type;
        $this->phone = $phone;
        $this->status = $status;
        $this->education = $education;
        $this->profession = $profession;
        $this->famname = $famname;
        $this->famrelation = $famrelation;
        $this->famaddress = $famaddress;
        $this->famkelurahan = $famkelurahan;
        $this->famkecamatan = $famkecamatan;
        $this->famcity = $famcity;
        $this->famphone = $famphone;
        $this->famprofession = $famprofession;
        $this->created = $created;
    }

    public function view(): View
    {
        return view('patients.print-excel', [
            'data' => $this->data,
            'norm' => $this->norm,
            'name' => $this->name,
            'address' => $this->address,
            'kelurahan' => $this->kelurahan,
            'kecamatan' => $this->kecamatan,
            'city' => $this->city,
            'hometown' => $this->hometown,
            'dateofbirth' => $this->dateofbirth,
            'religion' => $this->religion,
            'blood_type' => $this->blood_type,
            'phone' => $this->phone,
            'status' => $this->status,
            'education' => $this->education,
            'profession' => $this->profession,
            'famname' => $this->famname,
            'famrelation' => $this->famrelation,
            'famaddress' => $this->famaddress,
            'famkelurahan' => $this->famkelurahan,
            'famkecamatan' => $this->famkecamatan,
            'famcity' => $this->famcity,
            'famphone' => $this->famphone,
            'famprofession' => $this->famprofession,
            'created' => $this->created,
        ]);
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle(1)->getFont()->setBold(true);
    }
}
