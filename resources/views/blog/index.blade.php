@extends('layouts.app')

@section('content')
    <div class="wrapper blog-index">
        <h1>Submitters</h1>
        @foreach($pizzas as $pizza)
            <div class="blog-item">
                <img src="/img/pizza.png" alt="pizza icon">
                <h4><a href="{{ route('pizzas.show', $pizza->id) }}">{{ $pizza->name }}</a></h4>
            </div>
        @endforeach

    </div>

@endsection
