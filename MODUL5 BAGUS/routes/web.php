<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        'title' => 'Home'
    ]);
});

Route::get('/vaccine', function () {
    return view('vaccine',[
        'title' => 'Vaccine'
    ]);
});
Route::get('/form-vaccine', function () {
    return view('form-vaccine',[
        'title' => 'Add Vaccine'
    ]);
});

Route::get('/patient', function () {
    return view('patient',[
        'title' => 'Patient'
    ]);
});

Route::get('/form-patient.blade.php', function () {
    return view('form-patient.blade.php',[
        'title' => 'Add Patient'
    ]);
});
