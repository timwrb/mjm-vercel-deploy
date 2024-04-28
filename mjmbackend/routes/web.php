<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyDataController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dummydata/{id}', [DummyDataController::class, 'getData']);
