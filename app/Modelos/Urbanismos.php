<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Urbanismo extends Model
{
    protected $table = 'urbanismos';
    protected $fillable = [
        'id', 'id_estado','id_municipio','id_parroquia','id_sector','urbanismo'
    ];
    public $timestamps = false;

}
