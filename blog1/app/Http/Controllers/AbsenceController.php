<?php

namespace App\Http\Controllers;

use App\Absence;
use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    public function formulaire(){
    
     return view ('Absence');
}

public function traitement(){
	
		request()->validate([
	
	'date'=>['required','date'],
	
	
	]);
	
	$absence= absence::create([
	'IDEffectif' =>1,
	'DateAbsence'=>request("date"),
	'Motif'=>request("motif"),
	
	
]);
	
	
	return 'Nous avons bien recu vos informations:'.request('nom')." ".request('prenom')." ".request('date')." ".request('motif');
}
}
