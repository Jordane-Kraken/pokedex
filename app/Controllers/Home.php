<?php
namespace App\Controllers;
use App\Models\PokemonModel;

class Home extends BaseController
{
		public function index()
			{	
		$pokemon = new PokemonModel();
		$data['pokemons'] = $pokemon->getAllPokemonsWithTypes();

		return view('pokemon', $data) ;


		} 

}
