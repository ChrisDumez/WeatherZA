<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;




Route::get('/', [WeatherController::class, 'index']);

Route::get('/forcast/{lon}/{lat}/{key}/{city}', [WeatherController::class, 'Forcast']);


