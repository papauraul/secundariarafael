<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class maestros extends Model
{
   use SoftDeletes;
   protected $primaryKey = 'idm';  
   protected $fillable=['idm','nombre','edad','correo','cp','sexo','beca','activo','idc','archivo'];
   protected $date=['deleted_at'];
}
