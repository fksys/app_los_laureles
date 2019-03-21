<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    protected $table = 'subcategoria';

    protected $primaryKey = 'id_subcategoria';

    protected $fillable = [

        'id_subcategoria', 'categoria_id_categoria','nombre'
    ];

    public function productos(){
        return $this->hasMany('App\Producto','subcategoria_id_subcategoria','id_subcategoria');
    }
    public function categoria(){
        return $this->belongsTo('App\Categoria','categoria_id_categoria');

    }
}
