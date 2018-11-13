<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\municipios;//modelo
class controller_municipios extends Controller
{
    

//alta municipios//
    public function altamunicipios()//nombre de la funcion/misma que debes de tener en el archivo routes.php
    {
     	 
	 
	 $clavequesigue = municipios::withTrashed()->orderBy('id_mun','desc')
								->take(1)
								->get();

								//Id Desde 0//
								if(count($clavequesigue)==0)
								{
									$idmun =1;
								}
								else
								{
									$idmun= $clavequesigue[0]->id_mun+1;
								}
								//////
     return view ("sistema.altamunicipios")
	 ->with('idmun',$idmun);
	}
	
	/////
	//guarda mun//
    public function guardamunicipio(Request $request)
    {
		$id_mun = $request->id_mun;
        $municipio =  $request->municipio;
        
		 $this->validate($request,[
	     'id_mun'=>'required|numeric',
         'municipio'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/']
		 ]);
     
         $mun = new municipios;
			$mun->id_mun = $request->id_mun;
			$mun->municipio = $request->municipio;
			//$mun->idc=$request->idc;
			$mun->save();
			$proceso = "Excelente!!";
			$mensaje = "Registro guardado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
			
		  
        
    }
	//////////
	
	//Reporte//
	public function reportemunicipio()
	{
	$municipios=municipios::withTrashed()->orderBy('id_mun','asc')
	          ->get();
	  return view('sistema.reportemunicipio')
	  ->with('municipios',$municipios);                  
	}
	//////////
	
    ////Eliminación///
	
	public function eliminamunicipio($id_mun)
	{
		municipios::find($id_mun)->delete();
		$proceso = "ELIMINAR MAESTRO";
		$mensaje = "El maestro ha sido borrado Correctamente";
		return view ('sistema.mensaje')
				->with('proceso',$proceso)
				->with('mensaje',$mensaje);
	}
	
	//////




}//no eliminar nunca porque se jode el codigo :v
