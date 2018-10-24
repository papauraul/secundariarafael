<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; /*WithTrashed*/

class grados extends Model
{
    use SoftDeletes;
   protected $primaryKey = 'id_grado';  
   protected $fillable=['id_grado','grado'];
protected $date=['deleted_at'];
}
