<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; /*WithTrashed*/


class grupos extends Model
{
	use SoftDeletes;
    protected $primaryKey ='id_grupo';
    protected $fillable =['id_grupo','grupo','id_grado'];
	
protected $date=['deleted_at'];
}
