<?php namespace App\Models;

use CodeIgniter\Model;

class PokemonModel extends Model {
    protected $table = 'pokemon';
    protected $primaryKey = 'id';
    //protected $returnType = 'array';

    public function getAllPokemonsWithTypes() {
        $db = \Config\Database::connect();
        $builder = $db->table('type');
        $builder->select(
          '
          pokemon.numero,
          pokemon.nom,
          pokemon.attaque,
          pokemon.defense,
          pokemon.pv,
          pokemon.image,
          type.id,
          type.name,
          type.color
          '
        );
        $builder->join('pokemon_type', 'pokemon_type.type_id = type.id', 'inner');
        $builder->join('pokemon', 'pokemon.numero = pokemon_type.pokemon_numero', 'inner');
        $builder->groupBy('pokemon.numero');
        $query = $builder->get();
        return $query->getResultArray(); 
    }

}
  
