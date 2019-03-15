<!DOCTYPE html>
<html>
<!-- ---- MODIFICAR LOS CSS Y JS POR ESTATICOS DEL PROYECTO --- -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.min.css">
	<link rel="stylesheet" href="{{ asset('css/sidebar.menu.css')}}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.menu.white.css')}}">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('plugins/jquery/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<title>Los Laureles</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="sidebar bg-white-menu">
            @yield('sidebar')
        </div>
        {{-- contenido sitio --}}
        <div class="content">
            @yield('content')
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('js/sidebar.menu.js')}}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <script>
       $(function () {
           new PerfectScrollbar('.scrollbar');
       });
    </script>
</body>

</html>