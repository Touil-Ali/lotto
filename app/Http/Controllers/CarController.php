<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function getCarData()
    {
        $carData = Car::all();

        return response()->json($carData);
    }
}
