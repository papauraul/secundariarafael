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
    return view('sistema.secundaria');
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

//Municipio////
Route::get('/altamunicipios','controller_municipios@altamunicipios');
Route::POST('/guardamunicipio','controller_municipios@guardamunicipio')->name('guardamunicipio');
Route::get('/reportemunicipio','controller_municipios@reportemunicipio');
//Route::get('/modificamunicipio/{id_mun}','controller_municipios@modificamunicipio')->name('modificamunicipio');
///Route::get('/modificam/{id_mun','controller_municipios@modificamunicipio')->name('modificamunicipio');
//Route::POST('/guardamodificamun','controller_municipios@guardamodificamun')->name('guardamodificamun');
Route::get('/eliminamunicipio/{id_mun}','controller_municipios@eliminamunicipio')->name('eliminamunicipio');

////Grados///
Route::get('/altagrados','controller_grados@altagrados');
Route::POST('/guardagrado','controller_grados@guardagrado')->name('guardagrado');
Route::get('/reportegrados','controller_grados@reportegrados');
///Route::get('/modificagrados/{id_grado}','controller_grados@modificagrados')->name('modificagrados');
///Route::POST('/guardamodificag','controller_grados@guardamodificag')->name('guardamodificag');
///Route::get('/eliminagrados/{id_grado}','controller_grados@eliminagrados')->name('eliminagrados');

//////Ciclo////
Route::get('/altaciclo','controller_cicloescolars@altaciclo');
Route::POST('/guardaciclo','controller_cicloescolars@guardaciclo')->name('guardaciclo');
Route::get('/reporteciclo','controller_cicloescolars@reporteciclo');
//Route::get('/eliminaciclo/{id_ce}','controller_cicloescolars@eliminaciclo')->name('eliminaciclo');
//Route::get('/modificaciclo/{id_ce}','controller_cicloescolars@modificaciclo')->name('modificaciclo');
//Route::POST('/guardamodificaciclo','controller_cicloescolars@guardamodificaciclo')->name('guardamodificaciclo');

/////Grupos////
Route::get('/altagrupos','controller_grupos@altagrupos');
Route::POST('/guardagrupo','controller_grupos@guardagrupo')->name('guardagrupo');
Route::get('/reportegrupos','controller_grupos@reportegrupos');
//Route::get('/eliminagrupos/{id_grupo}','controller_grupos@eliminagrupos')->name('eliminagrupos');
//Route::get('/modificagrupos/{id_grupo}','controller_grupos@modificagrupos')->name('modificagrupos');
//Route::POST('/guardamodificagr','controller_grupos@guardamodificagr')->name('guardamodificagr');

/////Alumnos////
///Route::get('/tablas','controller_alumnos@tablas');
Route::get('/altalumno','controller_alumnos@altalumno');
Route::POST('/guardalumno','controller_alumnos@guardalumno')->name('guardalumno');
Route::get('/reportealumno','controller_alumnos@reportealumno');
//Route::get('/eliminalumno/{id_alum}','controller_alumnos@eliminalumno')->name('eliminaciclo');
//Route::get('/modificalumno/{id_alum}','controller_alumnos@modificalumno')->name('modificalumno');
//Route::POST('/guardamodificalumno','controller_alumnos@guardamodificalumno')->name('guardamodificalumno');

////Tutor////
Route::get('/altatutor','controller_tutors@altatutor');
Route::POST('/guardatutor','controller_tutors@guardatutor')->name('guardatutor');
Route::get('/reportetutor','controller_tutors@reportetutor');
//Route::get('/eliminatutor/{id_tut}','controller_tutors@eliminatutor')->name('eliminatutor');
//Route::get('/modificatutor/{id_tut}','controller_tutors@modificatutor')->name('modificatutor');
//Route::POST('/guardamodificatut','controller_tutors@guardamodificatutor')->name('guardamodificatutor');

////Profesor////
Route::get('/altaprofesor','controller_profesors@altaprofesor');
Route::POST('/guardaprofesor','controller_profesors@guardaprofesor')->name('guardaprofesor');
Route::get('/reporteprofesor','controller_profesors@reporteprofesor');
//Route::get('/eliminaprofesor/{id_profe}','controller_profesors@eliminaprofesor')->name('eliminaprofesor');
//Route::get('/modificaprofesor/{id_profe}','controller_profesors@modificaprofesor')->name('modificaprofesor');
//Route::POST('/guardamodificaprofe','controller_profesors@guardamodificaprofe')->name('guardamodificaprofe');
