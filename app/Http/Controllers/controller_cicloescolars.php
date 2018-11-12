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
		 
	   $clavequesigue = cicloescolars::orderBy('id_ce','desc')
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
	$cicloescolars=cicloescolars::orderBy('id_ce','asc')
	          ->get();
	  return view('sistema.reporteciclo')
	  ->with('cicloescolars',$cicloescolars);                  
	}
	////////// 
	
	//Eliminacion//
	public function eliminaciclo($id_ce)
	{
		cicloescolars::find($id_ce)->delete();
		$proceso = "ELIMINAR CICLO";
		$mensaje = "El ciclo ha sido borrado Correctamente";
		return view ('sistema.mensaje')
				->with('proceso',$proceso)
				->with('mensaje',$mensaje);
	}
	//////
	
	///Modificacion///
	
	public function modificaciclo($id_ce)
	{
		$cicloescolars = cicloescolars::where('idm','=',$idm)->get();
		$id_gen = $cicloescolars[0]->id_gen;
		
		$generacions = generacions::where('id_gen','=',$id_gen)->get();
		
		$todasdemas = generacions::where('id_gen','!=',$id_gen)->get();
		
		return view('sistema.modificaciclo')
				->with('cilo_escolar',$ciclo_escolar[0])
				->with('id_gen',$id_gen)
				->with('generacions',$generacions[0]->generacion)
				->with('todasdemas',$todasdemas);
	}
	/////
	
    ///Guarda Modificacion////
	
	public function guardaedicioncliclo(Request $request)
	{
		$nombre = $request -> nombre;
		$edad = $request -> edad;
		$correo = $request -> correo;
		$idm = $request -> idm;
		$cp = $request -> cp;
		//no se recibe el archivo
		// Validaciones de los campos
			$this -> validate($request,[
				'idm' => 'required|numeric',
				'nombre' => 'required|alpha',
				'edad' => 'required|integer|min:18|max:70',
				'correo' => 'required|email',
				'cp' => ['regex:/^[0-9]{5}$/'],
				'archivo'=>'image|mimes:jpg,jpeg,gif,png'
			]);
			
			$file = $request->file('archivo');
			if($file!="")
			{
				$ldate = date('Ymd_His_');
				$img = $file->getClientOriginalName();
				$img2 = $ldate.$img;
				\Storage::disk('local')->put($img2, \File::get($file));
			}
				$maest = maestros::find($idm);
					if($file!="")
					{
						$maest->archivo = $img2;
					}
				$maest -> idm = $request->idm;
				$maest -> nombre = $request->nombre;
				$maest -> edad = $request->edad;
				$maest -> correo = $request->correo;
				$maest -> cp = $request->cp;
				$maest -> idc = $request->idc;
				$maest -> save();
				$proceso = "MODIFICACION DE MAESTRO";
				$mensaje = "Maestro actualzado correctamente";
					return view("sistema.mensaje")
					->with('proceso',$proceso)	
					->with('mensaje',$mensaje);
	}
	
	/////
	
	
}
