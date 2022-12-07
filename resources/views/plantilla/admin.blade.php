<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Sistema de Kardex Postgrado">
        <meta name="author" content="JMMK">
        <meta name="keywords" content="Sistema de Kardex Postgrado">

        <title>SKP</title>

        <!-- Fontfaces CSS-->
        <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('style.css')}}" rel="stylesheet" media="all">
    </head>

    <body>
        @include('plantilla.cabesera')
        
        <div class="container">
            <div class="row margen"></div>
            <div class="row">
                <div class="escritorio">
                @yield('label1')
                @yield('label2')
                </div>
            </div>
        </div>
        <!-- Bootstrap JS-->
        <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    </body>
</html>