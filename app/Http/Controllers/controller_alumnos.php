<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\alumnos;
use App\municipios;
use App\grados;
use App\grupos;
use App\generacions;

class controller_alumnos extends Controller
{
	public function tablas()
	{
		return view('sistema.tablas');
	}
       public function altalumno()
    {
     	 //select * from carreras     all()
		 //select * from carreras where activo = 'si'
	 //  group by nombre asc
		 
	   $clavequesigue = alumnos::withTrashed()->orderBy('id_alum','desc')
								->take(1)
								->get();
	  if (count($clavequesigue)==0)
	  {
		  $ida = 1;
	  }
	  else
	  {
     $ida = $clavequesigue[0]->id_alum+1;
      }
	 $municipios = municipios::withTrashed()->orderBy('municipio','asc')
						  ->get();
	$grados = grados::withTrashed()->orderBy('grado','asc')
						  ->get();
	$grupos = grupos::withTrashed()->orderBy('grupo','asc')
						  ->get();

    $generacions = generacions::withTrashed()->orderBy('generacion','asc')
						  ->get();
     return view ("sistema.altalumno")
			->with('municipios',$municipios)
			->with('grados',$grados)
			->with('grupos',$grupos)
			->with('generacions',$generacions)
			->with('ida',$ida);
    }
	
	
	
	//Guarda Alumno//
	
	public function guardalumno(Request $request)
    {
		
		$id_alum = $request->id_alum;
        $nom_al =  $request->nom_al;
		$app_al = $request->app_al;
        $apm_al =  $request->apm_al;
		$sexo = $request->sexo;
        $calle =  $request->calle;
		$localidad = $request->localidad;
		$codigo_al = $request->codigo_al;
        
		
		$this->validate($request,[
	     'id_alum'=>'required|numeric',
         'nom_al'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'app_al'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'apm_al'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'calle'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'localidad'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		'archivo'=>'image|mimes:jpeg,png,gif,jpg',
		 'codigo_al'=>['regex:/^[0-9]{5}$/']
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
		 
		 $al = new alumnos;
		 
		 
			$al->id_alum = $request->id_alum;
			$al->nom_al = $request->nom_al;
			$al->app_al = $request->app_al;
			$al->apm_al = $request->apm_al;
			$al->calle = $request->calle;
			$al->localidad = $request->localidad;
			$al->archivo = $img2;
			$al->codigo_al = $request->codigo_al;
			$al->id_gen = $request->id_gen;
			$al->id_grado = $request->id_grado;
			$al->id_mun = $request->id_mun;
			$al->id_grupo = $request->id_grupo;
			
			//$grado->idc=$request->idc;
			$al->save();
			$proceso = "Excelente!!";
			$mensaje = "Registro guardado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		
		
	}
	
	//////////
	
	//Reporte//
	public function reportealumno()
	{
	$alumnos=alumnos::withTrashed()->orderBy('id_alum','asc')
	          ->get();
	  return view('sistema.reportealumno')
	  ->with('alumnos',$alumnos);                  
	}
	//////////

   
   
   
   
   
   
}
