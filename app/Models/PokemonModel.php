<?php namespace App\Models;

use CodeIgniter\Model;

class PokemonModel extends Model {
  protected $table = 'pokemon';
  protected $primaryKey = 'id';
  protected $returnType = 'array';
  
}