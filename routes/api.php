<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JornalEntryController;
use App\Http\Controllers\JornalEntryDetailsController;


Route::resource('users',UserController::class);
Route::resource('jouranl_entraies',JornalEntryController::class);
Route::resource('jouranl_entraie_details',JornalEntryDetailsController::class);
