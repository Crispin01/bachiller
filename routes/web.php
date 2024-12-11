<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquilinosController;

Route::get('/', function () {
    return view('home');
});

Route::resource('inquilinos', InquilinosController::class);

// route::get('/inquilinos',[InquilinosController::class,'index']);
