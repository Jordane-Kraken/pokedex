<?php
namespace App\Controllers;
use App\Models\PokemonModel;

class Home extends BaseController
{
    public function index()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getAllPokemonsWithTypes();
        return view('pokemon', $data);
		}

    public function plantType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getPlantPokemons();
        return view('pokemon', $data);
    } 
		
    public function waterType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getWaterPokemons();
        return view('pokemon', $data);
    } 
    public function iceType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getIcePokemons();
        return view('pokemon', $data);
    } 
    public function fireType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getFirePokemons();
        return view('pokemon', $data);
    } 
    public function bugType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getBugPokemons();
        return view('pokemon', $data);
		} 
    public function steelType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getSteelPokemons();
        return view('pokemon', $data);
		} 
    public function rockType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getRockPokemons();
        return view('pokemon', $data);
		} 
    public function electrikType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getElectrikPokemons();
        return view('pokemon', $data);
		} 
    public function dragoonType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getDragoonPokemons();
        return view('pokemon', $data);
    } 
    public function poisonType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getPoisonPokemons();
        return view('pokemon', $data);
		}
    public function psyType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getPsyPokemons();
        return view('pokemon', $data);
		}
    public function groundType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getGroundPokemons();
        return view('pokemon', $data);
		}
    public function fightType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getFightPokemons();
        return view('pokemon', $data);
		}
    public function normalType()
    {
        $pokemon = new PokemonModel();
        $data['pokemons'] = $pokemon->getNormalPokemons();
        return view('pokemon', $data);
    } 
}
