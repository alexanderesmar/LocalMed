<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;
use App\Modelos\Estado;

class Municipio extends Model
{
    protected $table = 'municipios';
    protected $fillable = [
        'id', 'id_estado','municipio'
    ];
    public $timestamps = false;

    public function full_dir()
    {
    	return $estado->estado.' '.$this->municipio;
    }

}
