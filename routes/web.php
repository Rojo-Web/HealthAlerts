<?php

use App\Http\Controllers\ReportesController;
use App\Mail\ResetPasswordMailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('pacientes', App\Http\Controllers\PacienteController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('proximasCitas', App\Http\Controllers\ProximasCitaController::class);
Route::resource('citasPendientes', App\Http\Controllers\CitasPendienteController::class);
Route::resource('registros', App\Http\Controllers\RegistroController::class);

Route::get('/reportes', ReportesController::class)->name('reportes');


Route::group(['prefix' => 'export'], function () {
    Route::get('citas-pendientes/{format}', [ReportesController::class, 'exportCitasPendientes'])->name('export.citas_pendientes');
    Route::get('proximas-citas/{format}', [ReportesController::class, 'exportProximasCitas'])->name('export.proximas_citas');
    Route::get('pacientes/{format}', [ReportesController::class, 'exportPacientes'])->name('export.pacientes');
    Route::get('registros/{format}', [ReportesController::class, 'exportRegistros'])->name('export.registros');
    Route::get('roles/{format}', [ReportesController::class, 'exportRoles'])->name('export.roles');
    Route::get('users/{format}', [ReportesController::class, 'exportUsers'])->name('export.users');
});
