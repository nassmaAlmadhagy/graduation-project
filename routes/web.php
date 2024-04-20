<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;


Route::get('/', [StaticController::class,'index']);

Route::get('/rating',[StaticController::class,'rating']);
Route::get('/test',[StaticController::class,'test']);
