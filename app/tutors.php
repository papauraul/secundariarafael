<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; /*WithTrashed*/

class tutors extends Model
{
     use SoftDeletes;
   protected $primaryKey = 'id_tut';  
   protected $fillable=['id_tut','nom_tut','app_tut','apm_tut','edad','sexo','parentesco','calle','localidad','archivo','id_alum','id_mun'];
protected $date=['deleted_at'];
}