<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';

    protected $primaryKey = 'id_producto';

    protected $fillable = [
        'id_producto','codigo_barra','subcategoria_id_subcategoria','imagen','stock','nombre',
    ];

    public function subcategoria(){
        return $this->belongsTo('App\SubCategoria','subcategoria_id_subcategoria');
    }
}
