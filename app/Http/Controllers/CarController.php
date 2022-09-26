<?php

namespace App\Http\Controllers;

use App\Car;
use App\Optional;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $validateData = [
        'targa' => 'required|size:7',
        'marca' => 'required|min:2|max:255',
        'anno_immatricolazione' => 'required|date',
        'km' => 'required|digits:8',
        'optionals' => 'exists:optionals,id',
    ];

    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car = new Car();
        $optionals = Optional::all();
        return view('cars.create', compact('car', 'optionals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate($this->validateData);

        $sentData = $request->all();

        $newCar = new Car();
        $newCar->targa = $sentData['targa'];
        $newCar->marca = $sentData['marca'];
        $newCar->anno_immatricolazione = $sentData['anno_immatricolazione'];
        $newCar->km = $sentData['km'];
        $newCar->save();
        $newCar->optionals()->sync($sentData['optionals']);

        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $optionals = Optional::all();
        $car = Car::findOrFail($id);
        return view('cars.edit', compact('car', 'optionals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validateData = $request->validate($this->validateData);
        
        $sentData = $request->all();

        $car = Car::findOrFail($id);
        
        $car->update($sentData);
        $car->optionals()->sync($sentData['optionals']);

        return redirect()->route('cars.show', $car->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $car = Car::findOrFail($id);
            $car::destroy($id);
            return redirect()->route('cars.index', $car->id)->with('delete', $car->title);
        }
    }
}
