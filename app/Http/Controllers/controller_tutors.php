<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tutors;//modelo
use App\alumnos;
use App\municipios;

class controller_tutors extends Controller
{
    public function altatutor()//nombre de la funcion/misma que debes de tener en el archivo routes.php
    {
     	 
	 
	 $clavequesigue = tutors::withTrashed()->orderBy('id_tut','desc')
								->take(1)
								->get();

								//Id Desde 0//
							if(count($clavequesigue)==0)
							{
								$idtut =1;
							}
							else
							{
								$idtut= $clavequesigue[0]->id_tut+1;
							}
							$alumnos = alumnos::withTrashed()->orderBy('nom_al','asc')
								->get();
							$municipios = municipios::withTrashed()->orderBy('municipio','asc')
								->get();
							//return $municipios;
								//////
   return view ("sistema.altatutor")
	 ->with('alumnos',$alumnos)
	 ->with('municipios',$municipios)
	 ->with('idtut',$idtut);
	}
	
		//Guarda tutor//
	public function guardatutor(Request $request)
    {
		
		$id_tut = $request->id_tut;
        $nom_tut =  $request->nom_tut;
		$app_tut = $request->app_tut;
        $apm_tut =  $request->apm_tut;
		$edad = $request->edad;
        $sexo =  $request->sexo;
		$parentesco = $request->parentesco;
        $calle =  $request->calle;
		$localidad = $request->localidad;
        $telefono =  $request->telefono;
		$archivo =  $request->archivo;
		
		
		$this->validate($request,[
	     'id_tut'=>'required|numeric',
		 'nom_tut'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'app_tut'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'apm_tut'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'edad'=>'required|numeric',
		 'parentesco'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'calle'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'localidad'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'telefono'=>['regex:/^[0-9]{10}$/'],
		'archivo'=>'image|mimes:jpeg,png,gif,jpg'
		 ]);
		 
		 $file = $request->file('archivo');
		 if($file!="")
		 {
			 $ldate = date('Ymd_His_');
			 $img = $file->getClientOriginalName();
			 $img2 = $ldate.$img;
			 \Storage::disk('local')->put($img2, \File::get($file));
		 }
		 else
		 {
		$img2= 'sin_especificar.png';	 
		 }
		 
		 $tut = new tutors;
		  
		 
			$tut->id_tut = $request->id_tut;
			$tut->nom_tut = $request->nom_tut;
			$tut->app_tut = $request->app_tut;
			$tut->apm_tut = $request->apm_tut;
			$tut->edad = $request->edad;
			$tut->sexo = $request->sexo;
			$tut->parentesco = $request->parentesco;
			$tut->calle = $request->calle;
			$tut->localidad = $request->localidad;
			$tut->telefono = $request->telefono;
			$tut->archivo = $img2;
			$tut->id_alum = $request->id_alum;
			$tut->id_mun = $request->id_mun;
			
			//$grado->idc=$request->idc;
			$tut->save();
			$proceso = "Excelente!!";
			$mensaje = "Registro guardado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		
		
	}
////////	
	
	//Reporte//
	public function reportetutor()
	{
	$tutors=tutors::withTrashed()->orderBy('id_tut','asc')
	          ->get();
	  return view('sistema.reportetutor')
	  ->with('tutors',$tutors);                  
	}
	//////////
	
	
	
}
