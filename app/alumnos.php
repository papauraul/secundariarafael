<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; /*WithTrashed*/

class alumnos extends Model
{
    use SoftDeletes;
   protected $primaryKey = 'id_alum';  
   protected $fillable=['id_alum','nom_al','app_al','apm_al','sexo','calle','localidad','archivo','codigo_al','id_gen','id_grado','id_mun','id_grupo'];
protected $date=['deleted_at'];
}
