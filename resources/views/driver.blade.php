@extends('layouts.main')
@section('content')
    @foreach($drivers as $driver)
        {{$driver->lastname}}
    @endforeach
@endsection
