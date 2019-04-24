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

Route::resource('absence', 'AbsenceController');
Route::resource('logistique', 'LogistiqueController');
//Route::get('/absence', 'AbsenceController@create'); 

//Route::post('/absence','AbsenceController@store');

//Route::get('/logistique', 'LogistiqueController@formulair'); 

//Route::post('/logistique', 'LogistiqueController@trait');




