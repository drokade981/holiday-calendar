<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolidayController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HolidayController::class, 'index']);