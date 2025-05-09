<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AcceuilController;

Route::get('/',[LoginController::class,'login'] );
Route::get('/acceuil',[AcceuilController::class,'index'] );
