<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="{{ asset('css/sidebar.menu.css')}}">
    <link rel="stylesheet" href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' 
    integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' 
    crossorigin='anonymous'>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="{{ asset('css/sidebar.menu.white.css')}}">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('plugins/jquery/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-initial d-flex flex-column" id="wrapper">
        {{--  ###   barra informaciones   ###  --}}
        <div class="d-flex justify-content-end"> 
            <ul class="lista_informacion">
                <li><a href="#">Iniciar Sesión</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
        {{--       ###         header      ###        --}}
        <div class="d-flex flex-row justify-content-between sticky-top" id="header">
                <div class="p-2">
                    <img src="/img/laureles.png" alt="">
                    <a class="navbar-brand navbar-title" href="#">Despensa Los Laureles</a>
                    <span class="navbar-text">
                        <a href="#" id="sidebar" class="bars">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </a>
                    </span>
                </div>
                <div class="p-2">
                    <div class="icons-cart">
                        <a class="btn shop-cart" id="btn-icons" href="#">
                            <i class="fas fa-shopping-basket" id="bask" style='font-size:24px;color:blue'></i>
                        </a>
                        <div class="pick-up">
                            <p class="cart__items__quantity"> 0 </p>
                        </div>
                    </div>
                </div>
        </div>
        {{--   ###   Contenido Principal   ###  --}}
        <div class="d-flex flex-nowrap bg-secondary" id="cont">
            @include('layouts.sidebar')
            <div class="d-inline-flex flex-grow"> 
                <div class="d-inline-flex ">
                    @yield('content-product')
                </div>
                <div class="d-flex flex-row-reverse bd-highlight">
                    <div class="cart" style="display:none;position:fixed;left:75.1%;">
                        <h2 class="cart_title"> Cart </h2>
                        <hr>
                        <div class="cart-buttons">
                            
                        </div>
                    </div>
                </div>
                   
            </div>

        </div>
    
        <section class="d-flex-column" id="contenido-footer">
            <footer class="" id="footer">
                <div class="col-xs-3">
                    <h4 style="text-align:center">Despensa Los Laureles</h4>    
                </div>
            </footer>
        </section>
        
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