<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    protected $table = 'parroquia';
    protected $fillable = [
        'id', 'id_estado','id_municipio','parroquia'
    ];
    public $timestamps = false;

}
