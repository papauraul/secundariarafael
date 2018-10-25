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
   
   
   
   
   
   
   
   
}
