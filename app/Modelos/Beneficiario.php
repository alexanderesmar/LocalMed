<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    protected $table = 'beneficiario';
    protected $fillable = [
        'id', 'ci', 'nombres','apellidos','edad','sexo','tel1','tel2','correo','id_estado','id_municipio','id_parroquia','id_sector','id_urbanismo','adicional_ubicacion','lat','lng','fecha_registro','fecha_modificacion','user_registro','id_patologia','patologia_urgencia','patologia_nivel','patologia_ideopatia','patologia_riesgo_contagio', 'patologia_tiempo','patologia_medicamento','medicamento_dosis','medicamento_alergia','id_doctor','id_medcenter','observacion','carnet','aprovado','created_at','updated_at'
    ];
    public $timestamps = true;

    public function nombre_completo()
    {
    	return $this->nombres.' '.$this->apellidos;
    } 

}
