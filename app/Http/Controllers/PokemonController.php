<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemon = Pokemon::all();
        return view("pokemon.index", ['pokemons' => $pokemon]);
    }

    public function show($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        return view('pokemon.show', ['pokemon' => $pokemon]);
    }
}
