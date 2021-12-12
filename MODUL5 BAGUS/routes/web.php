<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VaccinesController;

Route::get('/', function () {
    return view('home',[
        'title' => 'Home'
    ]);
});

Route::get('/vaccine', [VaccinesController::class, 'index'])->name('vaccine');
Route::get('/form-vaccine', [VaccinesController::class, 'create'])->name('form-vaccine');
Route::post('/save-vaccine', [VaccinesController::class, 'store'])->name('save-vaccine');
Route::get('/delete-data-vaccine/{id}', [VaccinesController::class, 'destroy'])->name('delete-data-vaccine');

Route::get('/edit-vaccine/{id}', [VaccinesController::class, 'edit'])->name('edit-vaccine');

Route::get('/patient', function () {
    return view('patient',[
        'title' => 'Patient'
    ]);
});

Route::get('/register-patient', function () {
    return view('register-patient',[
        'title' => 'Add Patient'
    ]);
});
