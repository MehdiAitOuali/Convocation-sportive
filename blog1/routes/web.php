<?php
use App\Http\Controllers\CategorieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('categorie','CategorieController');

//Route::get('/equipe', 'EquipeController@index');


Route::resource('equipe','EquipeController');

Route::get('/absence', function(){
	
 return view ('absence');
}); 

Route::post('/absence',function (){
	
	$absence= new App\absence;
	$absence->IDEffectif=1;
	$absence->DateAbsence=request("date");
	$absence->Motif=request("motif");
	
	
	$absence->save();
	
	return 'Nous avons bien recu vos informations:'.request('nom')." ".request('prenom')." ".request('date')." ".request('motif');
	
	
});

Route::get('/logistique', function(){
	
 return view ('logistique');
}); 

Route::post('/logistique',function (){
	return 'Nous avons bien recu vos informations:'.request('nom')." ".request('prenom')." ".request('date')." ".request('tache');
	
	
});




