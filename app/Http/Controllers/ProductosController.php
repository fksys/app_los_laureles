<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use App\SubCategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductosController extends Controller
{
    public function listar($id){
        $categorias = Categoria::all();
        $subcategorias = SubCategoria::all();
        $productos = DB::select('select * from producto where subcategoria_id_subcategoria = ?', [$id]);
        $subcategorias->each(function($subcategorias){
            $subcategorias->categoria;
        });
        return view('productos.listar')
        ->with('productos',$productos)       
        ->with('categorias',$categorias)
        ->with('subcategorias',$subcategorias);
    }
}
