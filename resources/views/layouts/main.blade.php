<!DOCTYPE html>
<html>
<!-- ---- MODIFICAR LOS CSS Y JS POR ESTATICOS DEL PROYECTO --- -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="{{ asset('css/sidebar.menu.css')}}">
    <link rel="stylesheet" href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' 
    integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' 
    crossorigin='anonymous'>>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="{{ asset('css/sidebar.menu.white.css')}}">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('plugins/jquery/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<title>Los Laureles</title>
</head>

<body>
    <div class="d-flex" id="wrapper" height="100%">
            <!-- menu lateral -->
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
    
            <!-- Contenido del Sitio -->
            <div class="col-xs-12 col-md-9 content" height="100%">
                <nav class="navbar navbar-expand-lg fixed-top bg-white-navbar">
                    <img src="/img/laureles.png" alt="">
                    <a class="navbar-brand navbar-title" href="#">Despensa Los Laureles</a>
                    <span class="navbar-text">
                        <a href="#" id="sidebar" class="bars">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </a>
                    </span>
                    <div class="shop-cart">
                        <a class="btn" href="#">
                            <i class="fas fa-shopping-basket bask" style='font-size:24px;color:#fbbc1e'></i>
                            <div class="pick-up">
                                <p class="cart__items__quantity"> 0 </p>
                            </div>
                        </a>
                    </div>
                </nav>
                <section class="container__producto row justify-content-center">
                    <div class="cart" style="display: none">
                        <h2 class="cart_title"> Cart </h2>
                        <hr>
                        <div class="cart-body">
                            <button class="btn btn-info btn-block" id="btnAddList " style="display:none">Agregar a la Lista</button>
                            <button class="btn btn-secondary btn-block" id="btnCreateList">Crear Lista</button>
                        </div>
                    </div> 
                    @yield('content')
                </section>
            </div>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('js/sidebar.menu.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <script>
       $(function () {
           new PerfectScrollbar('.scrollbar');
       });
    </script>
</body>

</html>