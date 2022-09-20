@extends('layouts.main')

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('cars.update', $car->id) }}" method="POST">
                @csrf
                @method('PUT')
                @include('cars.includes.form')
                
            </form>
        </div>
    </div>
</div>

@endsection