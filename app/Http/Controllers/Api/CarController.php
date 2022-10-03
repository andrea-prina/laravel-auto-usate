<?php

namespace App\Http\Controllers\Api;

use App\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::with('optionals')->get();

        if($cars){
            return response()->json([
                'response' => true,
                'results' => [
                    'data' => $cars
                ]]);
        }
        else return response('', 404);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::with('optionals')->find($id);

        if($car){
            return response()->json([
                'response' => true,
                'results' => [
                    'data' => $car
                ]]);
        }
        else return response('', 404);
    }

}
