<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;

class PokedexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pokedex'] = Pokedex::all();
        return view('pokedexs.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['pokedex'] = Pokedex::all();
        return view('pokedexs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pokedex::create($request->all());
        return redirect('/pokedexs');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['pokedex_detail'] = Pokedex::find($id);
        return view('pokedexs.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['pokedex_update'] = Pokedex::find($id);
        $data['pokedex'] = Pokedex::all();
        return view('pokedexs.update', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Pokedex::find($id)->update($request->all());
        return redirect('/pokedexs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pokedex::find($id)->delete();
        return redirect('/pokedexs');
    }
}
