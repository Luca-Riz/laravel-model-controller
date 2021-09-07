@extends('layouts.app')

@section('title', '-prodotto')

@section('content')
@dd($formato)
    <div>
        <h2>{{ $formato->title }} </h2>
        <p>{{ $formato['description'] }} </p>
        <p>Tipo di pasta: {{ $formato['shape_id'] }}</p>
        <p>Cottura: {{ $formato['cooking_time'] }}</p>     
    </div>
@endsection