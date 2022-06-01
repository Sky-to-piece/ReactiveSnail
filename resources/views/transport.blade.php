@extends('layouts.main')
@section('content')
    @foreach($transports as $transport)
        {{$transport->car_model}}
    @endforeach
@endsection
