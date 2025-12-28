<h1 class="mt-5">Pokedex Lists</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Type</td>
            <td>Species</td>
            <td>Height</td>
            <td>Weight</td>
            <td>HP</td>
            <td>Attack</td>
            <td>Defense</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($pokedex as $item) {?>
        <tr>
            <td>{{ $item->id }}</td>
            <td style="white-space: nowrap;">
                <a href="{{ url('/pokedexs/' . $item->id) }}" class="btn btn-link">
                    {{ $item->name }}
                </a>
            </td>
            <td>{{ $item->type }}</td>
            <td style="white-space: nowrap;">{{ $item->species }}</td>
            <td>{{ $item->height }}</td>
            <td>{{ $item->weight }}</td>
            <td>{{ $item->hp }}</td>
            <td>{{ $item->attack }}</td>
            <td>{{ $item->defense }}</td>
            <td>
                <div class="d-flex gap-2">
                    <a class="btn btn-warning btn-sm" href="{{ url('/pokedexs/' . $item->id . '/edit') }}">
                        แก้ไข
                    </a>
                    <form action="{{url('/pokedexs/'. $item->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm">ลบ</button>
                    </form>
                </div>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
