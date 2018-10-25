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
   
   
   
   
   
}
