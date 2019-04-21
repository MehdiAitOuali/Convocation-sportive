<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categorie;

class Equipe extends Model
{
   protected $table = 'EQUIPE';

   protected $fillable = [
       'NomEquipe', 'IDCategorie','Responsable'
   ];

  public $timestamps = false;

   public function categorie()
    {
        return $this->hasMany('App\Categorie');
    }

}
