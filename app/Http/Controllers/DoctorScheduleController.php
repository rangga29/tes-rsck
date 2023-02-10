<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\Doctor;
use App\Models\DoctorSchedule;
use App\Http\Requests\StoreDoctorScheduleRequest;
use App\Http\Requests\UpdateDoctorScheduleRequest;

class DoctorScheduleController extends Controller
{
    public function index()
    {
        $doctorSchedules = DoctorSchedule::orderBy('dcs_day')->orderBy('dcs_start')->get();
        $doctors = Doctor::orderBy('dr_name')->get();
        $clinics = Clinic::orderBy('cl_name')->get();
        return view('doctor-schedules.index', [
            'title' => 'Data Jadwal Dokter',
            'print' => 'no',
            'active' => 'schedules',
            'doctors' => $doctors,
            'clinics' => $clinics,
            'schedules' => $doctorSchedules
        ]);
    }

    public function store(StoreDoctorScheduleRequest $request)
    {
        $validateData = $request->validated();
        $schedules = DoctorSchedule::all();
        foreach($schedules as $schedule) {
            if($schedule->doctor_id == $validateData['doctor_id'] && $schedule->clinic_id == $validateData['clinic_id']) {
                if($schedule->dcs_day == $validateData['dcs_day']) {
                }
            }
        }
    }

    public function show(DoctorSchedule $doctorSchedule)
    {
        //
    }

    public function edit(DoctorSchedule $doctorSchedule)
    {
        //
    }

    public function update(UpdateDoctorScheduleRequest $request, DoctorSchedule $doctorSchedule)
    {
        //
    }

    public function destroy(DoctorSchedule $doctorSchedule)
    {
        //
    }
}
