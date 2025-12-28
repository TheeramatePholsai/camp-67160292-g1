@extends('template.default')

@section('content')
    <h1>{{ $pokedex_detail->name }}</h1>

    <div class="card">
        <div class="card-body">
            <img src="{{ $pokedex_detail->image_url }}" alt="{{ $pokedex_detail->name }}" style="width: 300px; height: auto;">

            <p><strong>Type:</strong> {{ $pokedex_detail->type }}</p>
            <p><strong>Species:</strong> {{ $pokedex_detail->species }}</p>
            <p><strong>Height:</strong> {{ $pokedex_detail->height }}</p>
            <p><strong>Weight:</strong> {{ $pokedex_detail->weight }}</p>
            <p><strong>HP:</strong> {{ $pokedex_detail->hp }}</p>
            <p><strong>Attack:</strong> {{ $pokedex_detail->attack }}</p>
            <p><strong>Defense:</strong> {{ $pokedex_detail->defense }}</p>

            <a class="btn btn-warning" href="{{ url('/pokedexs/' . $pokedex_detail->id . '/edit') }}">แก้ไข</a>
            <a class="btn btn-secondary" href="{{ url('/pokedexs') }}">กลับ</a>
        </div>
    </div>
@endsection
