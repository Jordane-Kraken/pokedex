<?php
namespace App\Controllers;
use App\Models\PokemonModel;

class Home extends BaseController
{
    public function index()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->findAll();
        return view('home', $data);
    }

 /*   public function typePokemon($type)
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getTypePokemons($type);
        return view('pokemonType', $data);

    }*/

    public function plantType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getTypePokemons('Plante');
        return view('pokemonType', $data);
    } 
		
    public function waterType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getTypePokemons('Eau');
        return view('pokemonType', $data);
    } 
    public function iceType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getTypePokemons('Glace');
        return view('pokemonType', $data);
    } 
    public function fireType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getTypePokemons('Feu');
        return view('pokemonType', $data);
    } 
    public function bugType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getTypePokemons('Insecte');
        return view('pokemonType', $data);
		} 
    public function steelType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getTypePokemons('Acier');
        return view('pokemonType', $data);
		} 
    public function rockType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getTypePokemons('Roche');
        return view('pokemonType', $data);
		} 
    public function electrikType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getTypePokemons('Electrik');
        return view('pokemonType', $data);
		} 
    public function dragoonType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getTypePokemons('Dragon');
        return view('pokemonType', $data);
    } 
    public function poisonType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getTypePokemons('Poison');
        return view('pokemonType', $data);
		}
    public function psyType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getTypePokemons('Psy');
        return view('pokemonType', $data);
		}
    public function groundType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getTypePokemons('Sol');
        return view('pokemonType', $data);
		}
    public function fightType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getTypePokemons('Combat');
        return view('pokemonType', $data);
		}
    public function normalType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getTypePokemons('Normal');
        return view('pokemonType', $data);
    }
}
