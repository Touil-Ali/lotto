<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return inertia('Welcome');
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

