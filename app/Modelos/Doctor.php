<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctor';
    protected $fillable = [
        'id', 'nombres', 'apellidos','tel','ci','correo','especialidad'
    ];
    
    public $timestamps = false;

    public function getNombreCompletoAtribute()
    {
    	return $this->nombres.' '.$this->apellidos;
    }

}
