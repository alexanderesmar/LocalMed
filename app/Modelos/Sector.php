<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $table = 'sectores';
    protected $fillable = [
        'id', 'id_estado','id_municipio','id_parroquia','sector'
    ];
    public $timestamps = false;

}
