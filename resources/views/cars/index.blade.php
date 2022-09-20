@extends('layouts.main')

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Targa</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Anno Immatricolazione</th>
                        <th scope="col">Km Percorsi</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cars as $car)
                    <tr>
                        <th scope="row"><a href="{{ route('cars.show', $car->id) }}" class="text-decoration-none">{{ $car->id }}</a></th>
                        <td>{{ $car->targa }}</td>
                        <td>{{ $car->marca }}</td>
                        <td>{{ $car->anno_immatricolazione }}</td>
                        <td>{{ $car->km }}</td>
                        <td><a href="{{ route('cars.edit', $car->id) }}" class="btn btn-sm btn-success">Edit</a><td>
                        <td><a href="" class="btn btn-sm btn-danger">Delete</a><td>
                    </tr>
                        
                    @empty
                    <tr>
                        <td colspan="5"> No data available </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection