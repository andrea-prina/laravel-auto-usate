@extends('layouts.main')

@section('main-content')

<div>
    <ul>
        <li>{{$car-> targa}}</li>
        <li>{{$car-> marca}}</li>
        <li>{{$car-> anno_immatricolazione}}</li>
        <li>{{$car-> kilometri}}</li>
    </ul>
</div>

@endsection