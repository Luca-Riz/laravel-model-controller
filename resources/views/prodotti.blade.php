@extends('layouts.app')
@section('title', 'pagina prodotti')

@section('content')
    <h1>Comics</h1> 
    <div class="container">
        <div class="card-container">
            @foreach($fumetti as $fumetto)
            <div class="card">
                <img src="{{ $fumetto['thumb']}}" alt="{{ $fumetto['title']}}">
                <div class="layover"><h2><a href=""> {{ $fumetto['title']}} </a></h2></div>
                @@dump($fumetto['title'])
            </div>
                
            @endforeach
        </div>
    </div>
    
@endsection