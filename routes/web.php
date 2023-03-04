<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

#home

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

##Employee

Route::any('/Create/Employee', [App\Http\Controllers\EmployeeController::class, 'createEmployee'])->name('createEmployee');

#Clients

Route::any('/Create/Client', [App\Http\Controllers\ClientController::class, 'createClient'])->name('createClient');

Route::get('/Client', [App\Http\Controllers\ClientController::class, 'getClient'])->name('getClient');

Route::get('/SingleClient/{id}', [App\Http\Controllers\ClientController::class, 'getSingleClient'])->name('getSingleClient');

##Company

Route::any('/Create/Company', [App\Http\Controllers\CompanyController::class, 'createCompany'])->name('createCompany');

Route::get('/Company', [App\Http\Controllers\CompanyController::class, 'getCompanies'])->name('getCompany');

Route::get('/SingleCompany/{id}', [App\Http\Controllers\CompanyController::class, 'getSingleCompany'])->name('getSingleCompany');

