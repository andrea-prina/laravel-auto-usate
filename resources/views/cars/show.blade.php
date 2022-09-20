@extends('layouts.main')

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    {{ 'Macchina n.' . $car->id }}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $car->targa }}</li>
                    <li class="list-group-item">{{ $car->marca }}</li>
                    <li class="list-group-item">{{ $car->anno_immatricolazione }}</li>
                    <li class="list-group-item">{{ $car->km }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection