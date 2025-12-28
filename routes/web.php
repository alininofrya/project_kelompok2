<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UKMController;
use App\Http\Controllers\authController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/ukm', function () {
    return view('UKM');
});
Route::get('/ukm/{param1}',[UKMController::class, 'show']);

Route::post('auth/store', [authController::class, 'store'])
		->name('auth.store');

Route::post('ukm/basket', [UKMController::class, 'store'])
    ->name('ukm.store');

Route::get('/login', function () {
    return view('auth.login');
});

