<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Equipe;

class Categorie extends Model
{
    protected $table = 'CATEGORIE';

    protected $fillable = [
        'NomCategorie'
    ];

    public $timestamps = false;

     public function equipe()
    {
        return $this->belongsTo('App\Equipe');
    }

}
