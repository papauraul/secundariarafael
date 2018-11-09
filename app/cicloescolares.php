<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; /*WithTrashed*/

class cicloescolars extends Model
{
	use SoftDeletes;
    protected $primaryKey ='id_ce';
    protected $fillable =['id_ce','ciclo_escolar','id_gen'];
	
	protected $date=['deleted_at'];
}
