<?php 

namespace App;
use Illuminate\Database\Eloquent\Model;

class Logistique extends Model { 
	
protected $table='LOGISTIQUE';
protected $fillable= ['IDEffectif','IDMatch',
	'Tache'];
	
 public $timestamps = false;	
public function equipe()
    {
        return $this->belongsTo('App\Logistique');
    }
	
}



?>