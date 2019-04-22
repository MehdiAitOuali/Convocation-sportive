<?php

namespace App\Http\Controllers;

use App\Logistique;
use Illuminate\Http\Request;

class LogistiqueController extends Controller
{
    public function formulair(){
    
     return view ('Logistique');
}

public function trait(){
	
		request()->validate([
	
	'date'=>['required','date'],
	
	
	]);
	
	$logistique= logistique::create([
	'IDEffectif' =>2,
	'IDMatch'=>2,
	'Tache'=>request("tache"),
	
	
]);
	
	
	return 'Nous avons bien recu vos informations:'.request('nom')." ".request('prenom')." ".request('date')." ".request('tache');
}
}
