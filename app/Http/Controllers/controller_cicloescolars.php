<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\cicloescolars;
use App\generacions;


class controller_cicloescolars extends Controller
{
    public function altaciclo()
    {
     	 //select * from carreras     all()
		 //select * from carreras where activo = 'si'
	 //  group by nombre asc
		 
	   $clavequesigue = cicloescolars::withTrashed()->orderBy('id_ce','desc')
								->take(1)
								->get();
	  if (count($clavequesigue)==0)
	  {
		  $idce = 1;
	  }
	  else
	  {
     $idce = $clavequesigue[0]->id_ce+1;
      }
	 $generacions = generacions::withTrashed()->orderBy('generacion','asc')
						  ->get();
	 //return $carreras;
     return view ("sistema.altaciclo")
	 
			->with('generacions',$generacions)
			->with('idce',$idce);
    }
	/////guarda ciclo///
	public function guardaciclo(Request $request)
    {
		$id_ce = $request->id_ce;
        $ciclo_escolar =  $request->ciclo_escolar;
        
		 $this->validate($request,[
	     'id_ce'=>'required|numeric',
         'ciclo_escolar'=>'required|numeric'
		 ]);
     
         $cicl = new cicloescolars;
			$cicl->id_ce = $request->id_ce;
			$cicl->ciclo_escolar = $request->ciclo_escolar;
			$cicl->id_gen = $request->id_gen;
			//$grado->idc=$request->idc;
			$cicl->save();
			$proceso = "Excelente!!";
			$mensaje = "Registro guardado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		  
        
    }
	
	//////
	
	//Reporte//
	public function reporteciclo()
	{
	$cicloescolars=cicloescolars::withTrashed()->orderBy('id_ce','asc')
	          ->get();
	  return view('sistema.reporteciclo')
	  ->with('cicloescolars',$cicloescolars);                  
	}
	////////// 
	
    
	
	
}
