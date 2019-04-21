<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Effectif extends Model
{
  protected $table = 'EFFECTIF';

  protected $fillable = [
      'Nom', 'Prenom','TypeLicence','IDCategorie',
      'date_naissance','adresse','mobile', 'email'
  ];

 public $timestamps = false;
}
