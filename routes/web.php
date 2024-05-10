<?php
use Illuminate\Support\Facades\Auth;
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
