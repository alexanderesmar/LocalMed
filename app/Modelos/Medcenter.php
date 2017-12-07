<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Medcenter extends Model
{
    protected $table = 'medcenter';
    protected $fillable = [
        'id', 'nombre', 'rif','tel1','tel2','correo','id_estado','id_municipio','id_parroquia','id_sector','id_urbanismo','adicional_ubicacion','lat','lng'
    ];
    public $timestamps = false;

}
