@extends('template.default')

@section('title', 'pokedex update')
@section('content')
    <h1>Pokedex Update</h1>
    <form action="{{ url('/pokedexs/'.$pokedex_update->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" value="{{$pokedex_update->name}}" required>

        <label for="type">Type</label>
        <input class="form-control" type="text" name="type" id="type" value="{{$pokedex_update->type}}" required>

        <label for="species">Species</label>
        <input class="form-control" type="text" name="species" id="species" value="{{$pokedex_update->species}}" required>

        <label for="height">Height</label>
        <input class="form-control" type="number" name="height" id="height" value="{{$pokedex_update->height}}" required>

        <label for="weight">Weight</label>
        <input class="form-control" type="number" name="weight" id="weight" value="{{$pokedex_update->weight}}" required>

        <label for="hp">HP</label>
        <input class="form-control" type="number" step="0.1" name="hp" id="hp" value="{{$pokedex_update->hp}}" required>

        <label for="attack">Attack</label>
        <input class="form-control" type="number" step="0.1" name="attack" id="attack" value="{{$pokedex_update->attack}}" required>

        <label for="defense">Defense</label>
        <input class="form-control" type="number" step="0.1" name="defense" id="defense" value="{{$pokedex_update->defense}}" required>

        <label for="image_url">Image URL</label>
        <input class="form-control" type="text" name="image_url" id="image_url" value="{{$pokedex_update->image_url}}" required>

        <button class="btn btn-primary mt-3" type="submit">บันทึก</button>
        <a class="btn btn-secondary mt-3" href="{{ url('/pokedexs') }}">ยกเลิก</a>
    </form>
@endsection
