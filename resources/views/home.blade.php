@extends('layouts.app')

@section('title')
 Welcome Home
@endsection

@section('content')

<div class="container">
    <h1>Menu</h1>
    <hr>
    <div class="row">        
      
        @foreach($plats as $plat)
        
        <div class="col-sm-4">
            <div class="card">
                <div class="img-top">
                    <img class="card-img-top" src="{{ asset("$plat->image") }}" alt="food">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Test</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium reprehenderit quam quod explicabo! Possimus facilis vero quo, nostrum soluta officiis minus tempore optio ut dolorem, autem ex error. Necessitatibus, veritatis.</p>
                    <a href="#" class="btn btn-primary">Reserve Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
