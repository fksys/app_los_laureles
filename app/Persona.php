<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona';

    protected $primaryKey = 'id_persona';

    protected $fillable = [

        'id_persona','nombres','apellido_paterno'
        ,'apellido_materno','rut','dv','telefono',
        'direccion'
    ];

    public function user(){

        return $this->hasOne('\App\User','persona_id_persona');

    }
}
