<?php

use App\Http\Controllers\ClinicController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorScheduleController;
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
