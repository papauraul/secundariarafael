<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\profesors;//modelo
use App\municipios;

class controller_profesors extends Controller
{
    public function altaprofesor()//nombre de la funcion/misma que debes de tener en el archivo routes.php
    {
     	 
	 
	 $clavequesigue = profesors::withTrashed()->orderBy('id_profe','desc')
								->take(1)
								->get();

								//Id Desde 0//
							if(count($clavequesigue)==0)
							{
								$idprof =1;
							}
							else
							{
								$idprof= $clavequesigue[0]->id_profe+1;
							}
							
							$municipios = municipios::withTrashed()->orderBy('municipio','asc')
								->get();
							
								//////
     return view ("sistema.altaprofesor")
	 ->with('municipios',$municipios)
	 ->with('idprof',$idprof);
	}

	//Guarda Profesor//
	
	public function guardaprofesor(Request $request)
    {
		
		$id_profe = $request->id_profe;
        $rfc =  $request->rfc;
		$nombre = $request->nombre;
        $app =  $request->app;
		$apm = $request->apm;
        $sexo =  $request->sexo;
		$edad = $request->edad;
        $calle =  $request->calle;
		$localidad = $request->localidad;
        $telefono =  $request->telefono;
		$archivo =  $request->archivo;
		
		
		$this->validate($request,[
	     'id_profe'=>'required|numeric',
		 'rfc'=>'required|numeric',
         'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'app'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'apm'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'edad'=>'required|numeric',
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
		 
		 $pr = new profesors;
		 
		 
			$pr->id_profe = $request->id_profe;
			$pr->rfc = $request->rfc;
			$pr->nombre = $request->nombre;
			$pr->app = $request->app;
			$pr->apm = $request->apm;
			$pr->sexo = $request->sexo;
			$pr->edad = $request->edad;
			$pr->calle = $request->calle;
			$pr->localidad = $request->localidad;
			$pr->telefono = $request->telefono;
			$pr->archivo = $img2;
			$pr->id_mun = $request->id_mun;
			
			//$grado->idc=$request->idc;
			$pr->save();
			$proceso = "Excelente!!";
			$mensaje = "Registro guardado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		
		
	}
////////	
	
	//Reporte//
	public function reporteprofesor()
	{
	$profesors=profesors::withTrashed()->orderBy('id_profe','asc')
	          ->get();
	  return view('sistema.reporteprofesor')
	  ->with('profesors',$profesors);                  
	}
	//////////
	
	//Eliminacion//
	public function eliminaprofesor($id_profe)
	{
		profesors::find($id_profe)->delete();
		$proceso = "ELIMINAR PROFESOR";
		$mensaje = "El profesor ha sido borrado Correctamente";
		return view ('sistema.mensaje')
				->with('proceso',$proceso)
				->with('mensaje',$mensaje);
	}
	//////
	
}
