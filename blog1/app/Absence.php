<?php 

namespace App;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model { 
	
protected $table='ABSENCE';
protected $fillable= ['IDEffectif','DateAbsence','date',
	'Motif'];
	
 public $timestamps = false;	
public function equipe()
    {
        return $this->belongsTo('App\Absence');
    }
	
}



?>