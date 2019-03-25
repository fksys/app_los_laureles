    <div class="sidebar bg-white-menu">
        <div class="menu">
            <!-- menu general -->
            <ul class="menu scrollbar">
                <!-- submenu -->
                <li>
                    <span class="name">Categorias</span>
                    <ul>
                        @foreach($categorias as $categoria)
                            <li class="parent">
                                <a href="#" class="employ current"><i class="fa fa-cart-plus" aria-hidden="true">{{$categoria->nombre}}</i></a>
                                @foreach($subcategorias as $subcategoria)
                                    @if($subcategoria->categoria->id_categoria == $categoria->id_categoria)          
                                        <ul class="submenu">
                                            <li><a href="{{ route('listar_productos',$subcategoria->id_subcategoria)}}">{{$subcategoria->nombre}}</a></li>   
                                        </ul>
                                    @endif
                            @endforeach 
                        @endforeach 
                        </li>
                    </ul>
                </li>


                <li>
                    <span class="name">Listas</span>
                    <ul>
                        <li><a href="#"><i class="fa fa-plus" aria-hidden="true"></i>Agregar Lista</a></li>
                        <li><a href="#"><i class="fa fa-table" aria-hidden="true"></i>Mis Listas</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
