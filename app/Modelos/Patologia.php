<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Patologia extends Model
{
    protected $table = 'patologias';
    protected $fillable = [
        'id', 'patologia', 'abreviacion','id_medicamentos','ideopatia','urgencia','riesgo_contagio','transmision','tiempo'
    ];
    public $timestamps = false;

}
