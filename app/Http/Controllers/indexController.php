<?php

namespace App\Http\Controllers;
use App\Producto;
use App\Categoria;
use App\SubCategoria;

use Illuminate\Http\Request;

class indexController extends Controller
{

    public function index(){
        $productos = Producto::all();
        $categorias = Categoria::all();
        $subcategorias = SubCategoria::all();
        
        $productos->each(function($productos){
            $productos->subcategoria;
        });
        $subcategorias->each(function($subcategorias){
            $subcategorias->categoria;
        });
        
        return view('welcome')
        ->with('categorias',$categorias)
        ->with('subcategorias',$subcategorias)  
        ->with('productos',$productos);

    }


}
