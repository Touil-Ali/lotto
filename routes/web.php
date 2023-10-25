<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\MapController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return inertia('Welcome');
});

Route::get('/map-data', [MapController::class, 'getMapData']);

Route::get('/car-data', [CarController::class, 'getCarData']);

Route::get('/map', function() {
    return inertia::render('VehiculeMap');
});

// Car routes
Route::get('/car-listings', function() {
    return inertia::render('CarListing');
});

Route::get('/user-profiles', function() {
    return inertia::render('UserProfile');
});

Route::get('/cars', [CarController::class, 'index']);
Route::post('/cars', [CarController::class, 'store']);

