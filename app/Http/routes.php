<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/hola', function () {
    echo "hola Mundo -- tic 71";
});

Route::get('/areatriangulo', function () {
    $base= 10;
    $altura = 40;
    $area = ($base *$altura)/2;
    echo "El area es" . $area;
});


Route::get('/areatriangulo2/{base}/{altura}',
 function ($base,$altura) {
    $area = ($base *$altura)/2;
    echo "El area es" . $area;
});
*/
/*
Route::get('/mensajito','curso@mensaje');
Route::get('/at','curso@areatriangulo');
Route::get('/ac/{lado}','curso@areacuadrado');
Route::get('/ventas/costos/{cant}/{costo}','curso@total');

Route::get('/altamaestro','curso@altamaestro');
Route::POST('/guardamaestro','curso@guardamaestro')->name('guardamaestro');
Route::get('/reportemaestros','curso@reportemaestros');
Route::get('/modificam/{idm}','curso@modificam')->name('modificam');
Route::POST('/guardamodificam','curso@guardamodificam')->name('guardamodificam');
Route::get('/eliminam/{idm}','curso@eliminam')->name('eliminam');
Route::get('/restauram/{idm}','curso@restauram')->name('restauram');
Route::get('/efisicam/{idm}','curso@efisicam')->name('efisicam');

Route::get('/login','usuariosc@login')->name('login');
Route::POST('/iniciasesion','usuariosc@iniciasesion')->name('iniciasesion');
Route::get('/principal','usuariosc@principal')->name('principal');
*/

//
Route::get('/altamunicipios','controller_municipios@altamunicipios');
Route::POST('/guardamunicipio','controller_municipios@guardamunicipio')->name('guardamunicipio');
Route::get('/reportemunicipio','controller_municipios@reportemunicipio');
Route::get('/modificamunicipio/{id_mun}','controller_municipios@modificamunicipio')->name('modificamunicipio');
Route::POST('/guardamodificam','controller_municipio@guardamodificam')->name('guardamodificam');
//Route::get('/eliminam/{id_mun}','controller_municipio@eliminam')->name('eliminam');
//Route::get('/restauram/{id_mun}','controller_municipio@restauram')->name('restauram');



Route::get('/altagrados','controller_grados@altagrados');
Route::POST('/guardagrado','controller_grados@guardagrado')->name('guardagrado');
Route::get('/reportegrado','controller_grados@reportegrado');
Route::get('/modificagrado/{id_grado}','controller_grados@modificagrado')->name('modificagrado');
Route::POST('/guardamodificag','controller_grados@guardamodificag')->name('guardamodificag');




