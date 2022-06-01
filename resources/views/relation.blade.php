@extends('layouts.main')
@section('content')
    @foreach($relations as $relation)
        {{$relation->id_driver}}
    @endforeach
@endsection
