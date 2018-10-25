<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; /*WithTrashed*/

class generacions extends Model
{
     use SoftDeletes;
   protected $primaryKey = 'id_gen';  
   protected $fillable=['id_gen','generacion'];
protected $date=['deleted_at'];
}
