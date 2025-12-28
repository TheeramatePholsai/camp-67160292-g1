@extends('template.default')

@section('title', 'pokedex')
@section('content')
    <h1>Pokedex Create</h1>
    <form action="{{ url('/pokedexs') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" required>

        <label for="type">Type</label>
        <input class="form-control" type="text" name="type" id="type" required>

        <label for="species">Species</label>
        <input class="form-control" type="text" name="species" id="species" required>

        <label for="height">Height</label>
        <input class="form-control" type="number" name="height" id="height" required>

        <label for="weight">Weight</label>
        <input class="form-control" type="number" name="weight" id="weight" required>

        <label for="hp">HP</label>
        <input class="form-control" type="number" step="0.1" name="hp" id="hp" required>

        <label for="attack">Attack</label>
        <input class="form-control" type="number" step="0.1" name="attack" id="attack" required>

        <label for="defense">Defense</label>
        <input class="form-control" type="number" step="0.1" name="defense" id="defense" required>

        <label for="image_url">Image URL</label>
        <input class="form-control" type="text" name="image_url" id="image_url" required>

        <button class="btn btn-primary mt-3" type="submit">เพิ่มโปเกมอน</button>
    </form>

    @include('pokedexs.table')
@endsection
