<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class profesors extends Model
{
   use SoftDeletes;
   protected $primaryKey = 'id_profe';  
   protected $fillable=['id_profe','rfc','nombre','app','apm','sexo','edad','calle','localidad','telefono','archivo','id_mun'];
   protected $date=['deleted_at'];
}
