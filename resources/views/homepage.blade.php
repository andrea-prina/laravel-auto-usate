@extends('layouts.main')

@section('main-content')

<div>
    <ul>
        @forelse ($cars as $car )
            <li>{{$car->targa}}</li>
            <li>{{$car->marca}}</li>
            <li>{{$car->anno_immatricolazione}}</li>
            <li>{{$car->km}}</li>
        @empty
            
        @endforelse
    </ul>
</div>

@endsection