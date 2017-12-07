<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $table = 'medicamentos';
    protected $fillable = [
        'id', 'medicamento', 'principio_activo','id_presentacion','cantidad_mg','cant_dosis','marca_laboratorio'
    ];
    public $timestamps = false;

}
