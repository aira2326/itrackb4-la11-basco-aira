<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;

Route::get('/', function () {
    return redirect()->route('subjects.index');
});

Route::resource('subjects', SubjectController::class);