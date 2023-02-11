<?php

use App\Http\Controllers\ClinicController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorScheduleController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RegistrationClinicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/clinics/edit/{slug}', [ClinicController::class, 'edit']);
Route::get('/clinics/deleted', [ClinicController::class, 'deleted'])->name('clinics.deleted');
Route::get('/clinics/restore/{slug}', [ClinicController::class, 'restore'])->name('clinics.restore');
Route::get('/clinics/permanent-delete/{slug}', [ClinicController::class, 'permanentDelete'])->name('clinics.permanent-delete');
Route::resource('/clinics', ClinicController::class)->except('create', 'show');

Route::get('/doctors/edit/{slug}', [DoctorController::class, 'edit']);
Route::get('/doctors/deleted', [DoctorController::class, 'deleted'])->name('doctors.deleted');
Route::get('/doctors/restore/{slug}', [DoctorController::class, 'restore'])->name('doctors.restore');
Route::get('/doctors/permanent-delete/{slug}', [DoctorController::class, 'permanentDelete'])->name('doctors.permanent-delete');
Route::resource('/doctors', DoctorController::class)->except('create', 'show');

Route::get('/schedules/edit/{slug}', [DoctorScheduleController::class, 'edit']);
Route::get('/schedules/deleted', [DoctorScheduleController::class, 'deleted'])->name('schedules.deleted');
Route::get('/schedules/restore/{slug}', [DoctorScheduleController::class, 'restore'])->name('schedules.restore');
Route::get('/schedules/permanent-delete/{slug}', [DoctorScheduleController::class, 'permanentDelete'])->name('schedules.permanent-delete');
Route::resource('/schedules', DoctorScheduleController::class)->except('create', 'show');

Route::post('/patients/search', [PatientController::class, 'search'])->name('patients.search');
Route::get('/patients/{patient}/edit-family', [PatientController::class, 'editFamily'])->name('patients.edit-family');
Route::put('/patients/family/{patient}', [PatientController::class, 'updateFamily'])->name('patients.update-family');
Route::get('/patients/deleted', [PatientController::class, 'deleted'])->name('patients.deleted');
Route::get('/patients/restore/{code}', [PatientController::class, 'restore'])->name('patients.restore');
Route::get('/patients/permanent-delete/{code}', [PatientController::class, 'permanentDelete'])->name('patients.permanent-delete');
Route::get('/patients/report/pdf', [PatientController::class, 'reportPdf'])->name('patients.report.pdf');
Route::post('/patients/report/pdf/{type}', [PatientController::class, 'printPdf'])->name('patients.report.pdf.print');
Route::get('/patients/report/excel', [PatientController::class, 'reportExcel'])->name('patients.report.excel');
Route::post('/patients/report/excel/{type}', [PatientController::class, 'printExcel'])->name('patients.report.excel.print');
Route::resource('/patients', PatientController::class);

Route::post('/polyclinics/search', [RegistrationClinicController::class, 'search'])->name('polyclinics.search');
Route::get('/polyclinics/deleted', [RegistrationClinicController::class, 'deleted'])->name('polyclinics.deleted');
Route::get('/polyclinics/restore/{code}', [RegistrationClinicController::class, 'restore'])->name('polyclinics.restore');
Route::get('/polyclinics/permanent-delete/{code}', [RegistrationClinicController::class, 'permanentDelete'])->name('polyclinics.permanent-delete');
Route::get('/polyclinics/report/pdf', [RegistrationClinicController::class, 'reportPdf'])->name('polyclinics.report.pdf');
Route::post('/polyclinics/report/pdf/{type}', [RegistrationClinicController::class, 'printPdf'])->name('polyclinics.report.pdf.print');
Route::get('/polyclinics/report/excel', [RegistrationClinicController::class, 'reportExcel'])->name('polyclinics.report.excel');
Route::post('/polyclinics/report/excel/{type}', [RegistrationClinicController::class, 'printExcel'])->name('polyclinics.report.excel.print');
Route::resource('/polyclinics', RegistrationClinicController::class);
