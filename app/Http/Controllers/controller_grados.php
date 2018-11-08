<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\grados;//modelo
class controller_grados extends Controller
{
	
	
    //alta $grados//
    public function altagrados()//nombre de la funcion/misma que debes de tener en el archivo routes.php
    {
     	 
	 
	 $clavequesigue = grados::withTrashed()->orderBy('id_grado','desc')
								->take(1)
								->get();

								//Id Desde 0//
								if(count($clavequesigue)==0)
								{
									$id_grado =1;
								}
								else
								{
									$id_grado= $clavequesigue[0]->id_grado+1;
								}
								//////
     return view ("sistema.altagrados")
	 ->with('idgrado',$id_grado);
	}
	
	/////
	//guarda grados//
	public function guardagrado(Request $request)
    {
		$id_grado = $request->id_grado;
        $grado =  $request->grado;
        
		 $this->validate($request,[
	     'id_grado'=>'required|numeric',
         'grado'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/']
		 ]);
     
         $grado = new grados;
			$grado->id_grado = $request->id_grado;
			$grado->grado = $request->grado;
			//$grado->idc=$request->idc;
			$grado->save();
			$proceso = "Excelente!!";
			$mensaje = "Registro guardado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		  
        
    }
	///////
	
	//Reporte//
	public function reportegrados()
	{
	$grados=grados::withTrashed()->orderBy('id_grado','asc')
	          ->get();
	  return view('sistema.reportegrados')
	  ->with('grados',$grados);                  
	}
	//////////
	
	
	
}
