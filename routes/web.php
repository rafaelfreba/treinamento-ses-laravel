<?php

use App\Http\Controllers\CountyController;
use App\Http\Controllers\PatientController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
// Route::get('/patients', [PatientController::class, 'create'])->name('patients.create');
// Route::get('/patients', [PatientController::class, 'edit'])->name('patients.edit');
// Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');
// Route::put('/patients', [PatientController::class, 'update'])->name('patients.update');
// Route::delete('/patients', [PatientController::class, 'destroy'])->name('patients.destroy');

Route::resource('patients', PatientController::class);
Route::resource('counties', CountyController::class);



