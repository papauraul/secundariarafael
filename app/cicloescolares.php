<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cicloescolars extends Model
{
    protected $primaryKey ='id_ce';
    protected $fillable =['id_ce','ciclo_escolar','id_gen'];
}
