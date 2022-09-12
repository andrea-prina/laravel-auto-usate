<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function(){

        $cars = Car::all();

        return view('homepage', compact('cars'));
    }
}