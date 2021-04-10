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
          '
        );
        $builder->join('pokemon_type', 'pokemon_type.type_id = type.id', 'inner');
        $builder->join('pokemon', 'pokemon.numero = pokemon_type.pokemon_numero', 'inner');
        $builder->groupBy('pokemon.numero');
        $query = $builder->get();
        return $query->getResultArray(); 
    }

    public function getPlantPokemons() {
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
          '
        );
        $builder->where('type.name', 'Plante');
        $builder->join('pokemon_type', 'pokemon_type.type_id = type.id', 'inner');
        $builder->join('pokemon', 'pokemon.numero = pokemon_type.pokemon_numero', 'inner');
        $builder->groupBy('pokemon.numero');
        $query = $builder->get();
        return $query->getResultArray(); 
  }

    public function getWaterPokemons() {
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
          '
        );
        $builder->where('type.name', 'Eau');
        $builder->join('pokemon_type', 'pokemon_type.type_id = type.id', 'inner');
        $builder->join('pokemon', 'pokemon.numero = pokemon_type.pokemon_numero', 'inner');
        $builder->groupBy('pokemon.numero');
        $query = $builder->get();
        return $query->getResultArray(); 
    }
    public function getIcePokemons() {
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
          '
        );
        $builder->where('type.name', 'Glace');
        $builder->join('pokemon_type', 'pokemon_type.type_id = type.id', 'inner');
        $builder->join('pokemon', 'pokemon.numero = pokemon_type.pokemon_numero', 'inner');
        $builder->groupBy('pokemon.numero');
        $query = $builder->get();
        return $query->getResultArray(); 
    }
    public function getFirePokemons() {
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
          '
        );
        $builder->where('type.name', 'Feu');
        $builder->join('pokemon_type', 'pokemon_type.type_id = type.id', 'inner');
        $builder->join('pokemon', 'pokemon.numero = pokemon_type.pokemon_numero', 'inner');
        $builder->groupBy('pokemon.numero');
        $query = $builder->get();
        return $query->getResultArray(); 
    }
    public function getBugPokemons() {
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
          '
        );
        $builder->where('type.name', 'Insecte');
        $builder->join('pokemon_type', 'pokemon_type.type_id = type.id', 'inner');
        $builder->join('pokemon', 'pokemon.numero = pokemon_type.pokemon_numero', 'inner');
        $builder->groupBy('pokemon.numero');
        $query = $builder->get();
        return $query->getResultArray(); 
  }
    public function getSteelPokemons() {
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
          '
        );
        $builder->where('type.name', 'Acier');
        $builder->join('pokemon_type', 'pokemon_type.type_id = type.id', 'inner');
        $builder->join('pokemon', 'pokemon.numero = pokemon_type.pokemon_numero', 'inner');
        $builder->groupBy('pokemon.numero');
        $query = $builder->get();
        return $query->getResultArray(); 
  }
      public function getRockPokemons() {
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
          '
        );
        $builder->where('type.name', 'Roche');
        $builder->join('pokemon_type', 'pokemon_type.type_id = type.id', 'inner');
        $builder->join('pokemon', 'pokemon.numero = pokemon_type.pokemon_numero', 'inner');
        $builder->groupBy('pokemon.numero');
        $query = $builder->get();
        return $query->getResultArray(); 
    }
    public function getElectrikPokemons() {
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
          '
        );
        $builder->where('type.name', 'Électrik');
        $builder->join('pokemon_type', 'pokemon_type.type_id = type.id', 'inner');
        $builder->join('pokemon', 'pokemon.numero = pokemon_type.pokemon_numero', 'inner');
        $builder->groupBy('pokemon.numero');
        $query = $builder->get();
        return $query->getResultArray(); 
    }
      public function getDragoonPokemons() {
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
          '
        );
        $builder->where('type.name', 'Dragon');
        $builder->join('pokemon_type', 'pokemon_type.type_id = type.id', 'inner');
        $builder->join('pokemon', 'pokemon.numero = pokemon_type.pokemon_numero', 'inner');
        $builder->groupBy('pokemon.numero');
        $query = $builder->get();
        return $query->getResultArray(); 
    }
      public function getPoisonPokemons() {
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
          '
        );
        $builder->where('type.name', 'Poison');
        $builder->join('pokemon_type', 'pokemon_type.type_id = type.id', 'inner');
        $builder->join('pokemon', 'pokemon.numero = pokemon_type.pokemon_numero', 'inner');
        $builder->groupBy('pokemon.numero');
        $query = $builder->get();
        return $query->getResultArray(); 
    }
    public function getPsyPokemons() {
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
          '
        );
        $builder->where('type.name', 'Psy');
        $builder->join('pokemon_type', 'pokemon_type.type_id = type.id', 'inner');
        $builder->join('pokemon', 'pokemon.numero = pokemon_type.pokemon_numero', 'inner');
        $builder->groupBy('pokemon.numero');
        $query = $builder->get();
        return $query->getResultArray(); 
    }
    public function getGroundPokemons() {
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
          '
        );
        $builder->where('type.name', 'Sol');
        $builder->join('pokemon_type', 'pokemon_type.type_id = type.id', 'inner');
        $builder->join('pokemon', 'pokemon.numero = pokemon_type.pokemon_numero', 'inner');
        $builder->groupBy('pokemon.numero');
        $query = $builder->get();
        return $query->getResultArray(); 
    }
      public function getFightPokemons() {
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
          '
        );
        $builder->where('type.name', 'Combat');
        $builder->join('pokemon_type', 'pokemon_type.type_id = type.id', 'inner');
        $builder->join('pokemon', 'pokemon.numero = pokemon_type.pokemon_numero', 'inner');
        $builder->groupBy('pokemon.numero');
        $query = $builder->get();
        return $query->getResultArray(); 
    }
    public function getNormalPokemons() {
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
          '
        );
        $builder->where('type.name', 'Normal');
        $builder->join('pokemon_type', 'pokemon_type.type_id = type.id', 'inner');
        $builder->join('pokemon', 'pokemon.numero = pokemon_type.pokemon_numero', 'inner');
        $builder->groupBy('pokemon.numero');
        $query = $builder->get();
        return $query->getResultArray(); 
    }
}
  
