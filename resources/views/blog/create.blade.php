@extends('layouts.app')

@section('content')
    <div class="wrapper contact">
        <h1>Get in touch</h1>
        <form action="{{ route('pizzas.store') }}" method="POST">
            @csrf
            <label for="name">Your name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">E-mail Address:</label>
            <input type="text" name="email" id="email" required>

            <label for="type">Choose type of programmer/coder you want to contact:</label>
            <select name="type" id="type">
                <option value="app">Application Developer</option>
                <option value="front">Front-End Developer</option>
                <option value="back">Back end Developer</option>
                <option value="full">Full Web Developer</option>
            </select>
            <label for="base">Choose developer level:</label>
            <select name="developer" id="developer">
                <option value="Basic">Basic</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Expert">Expert</option>
            </select>
            <fieldset>
                <label>Choose type of look you wish:</label>
                <input type="checkbox" name="design[]" value="Interactive">Interactive    <br/>
                <input type="checkbox" name="design[]" value="Simple">Simple              <br/>
                <input type="checkbox" name="design[]" value="Attractive">Attractive      <br/>
                <input type="checkbox" name="design[]" value="Abstract">Abstract          <br/>
            </fieldset>
            <input type="submit" value="SUBMIT">
        </form>
    </div>
@endsection
