<?php

use App\Http\Controllers\ClinicController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/clinics/edit/{slug}', [ClinicController::class, 'edit']);
Route::get('/clinics/deleted', [ClinicController::class, 'deleted'])->name('clinics.deleted');
Route::get('/clinics/restore/{slug}', [ClinicController::class, 'restore'])->name('clinics.restore');
Route::get('/clinics/permanent-delete/{slug}', [ClinicController::class, 'permanentDelete'])->name('clinics.permanent-delete');
Route::resource('/clinics', ClinicController::class)->except('create', 'show');
