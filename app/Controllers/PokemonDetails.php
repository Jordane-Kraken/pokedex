<?php
namespace App\Controllers;
use App\Models\PokemonModel;

class PokemonDetails extends BaseController
{
    public function find($id)
    {
        $pokemon = new PokemonModel();
        $pokemon = $pokemon->find($id);
        return view('pokemonDetails', $pokemon);
    }
}