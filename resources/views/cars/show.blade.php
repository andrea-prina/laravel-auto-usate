@extends('layouts.main')

@section('main-content')

<div class="container">
    <div class="row mt-5">
        <div class="col-12 d-flex justify-content-center">
            <div class="card" style="width: 28rem;">
                <div class="card-header">
                    {{ 'Macchina n.' . $car->id }}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Targa: {{ $car->targa }}</li>
                    <li class="list-group-item">Marca: {{ $car->marca }}</li>
                    <li class="list-group-item">Anno: {{ $car->anno_immatricolazione }}</li>
                    <li class="list-group-item">Km: {{ $car->km }}</li>

                    
                    <li class="list-group-item">
                        Optional:
                        <span class="badge badge-pill text-primary">
                            @if (isset($car->optionals))
                                @foreach ($car->optionals as $optional )
                                {{ $optional->nome }} -
                                @endforeach
                            @else
                                Nessun optional disponibile
                            @endif
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection