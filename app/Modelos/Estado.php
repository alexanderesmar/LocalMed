<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';
    protected $fillable = [
        'id', 'estado'
    ];
    public $timestamps = false;

}
