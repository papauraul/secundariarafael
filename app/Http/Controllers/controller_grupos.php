<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\grupos;
use App\grados;

class controller_grupos extends Controller
{
   public function altagrupos()
    {
     	 //select * from carreras     all()
		 //select * from carreras where activo = 'si'
	 //  group by nombre asc
		 
	   $clavequesigue = grupos::withTrashed()->orderBy('id_grupo','desc')
								->take(1)
								->get();
	  if (count($clavequesigue)==0)
	  {
		  $idg = 1;
	  }
	  else
	  {
     $idg = $clavequesigue[0]->id_grupo+1;
      }
	 $grados = grados::withTrashed()->orderBy('grado','asc')
						  ->get();
	 //return $carreras;
     return view ("sistema.altagrupos")
	 
			->with('grados',$grados)
			->with('idg',$idg);
    }
	
	
	///guarda grupo//
	public function guardagrupo(Request $request)
    {
		$id_grupo = $request->id_grupo;
        $grupo =  $request->grupo;
		
		$this->validate($request,[
	     'id_grupo'=>'required|numeric',
         'grupo'=>['regex:/^[A-Z]+$/']
		 ]);
		
		 $gr = new grupos;
			$gr->id_grupo = $request->id_grupo;
			$gr->grupo = $request->grupo;
			$gr->id_grado = $request->id_grado;
			//$grado->idc=$request->idc;
			$gr->save();
			$proceso = "Excelente!!";
			$mensaje = "Registro guardado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		
		
		
	}
	
	/////////
   
//Reporte//
	public function reportegrupos()
	{
	$grupos=grupos::withTrashed()->orderBy('id_grupo','asc')
	          ->get();
	  return view('sistema.reportegrupos')
	  ->with('grupos',$grupos);                  
	}
	//////////   
   
   //Eliminacion//
	public function eliminagrupos($id_grupo)
	{
		grupos::find($id_grupo)->delete();
		$proceso = "ELIMINAR GRUPO";
		$mensaje = "El grupo ha sido borrado Correctamente";
		return view ('sistema.mensaje')
				->with('proceso',$proceso)
				->with('mensaje',$mensaje);
	}
	//////
   
   
}
