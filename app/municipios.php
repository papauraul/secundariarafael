<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; /*WithTrashed*/

class municipios extends Model
{
   use SoftDeletes;
   protected $primaryKey = 'id_mun';  
   protected $fillable=['id_mun','municipio'];
protected $date=['deleted_at'];
}
