<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {!! SEO::generate() !!}
    </head>
    <body>
        @extends("layouts.template")
        @section("navbar")
        
        @endsection

        @section("header")
        @parent
        
        @endsection

        @section("contenido")
        @parent



        
        <div class="container">
            <div class="row">
                <div class="col-12 mb-2 text-center">
                    <h2>Noticias destacadas</h2>
                </div>
            </div>
            <hr>
            <div class="row">
                @foreach($articulos as $i)
                <div class="col-sm-6 col-lg-4">
                    <h4><strong>{{ $i->NOMBREARTICULO }}</strong></h4>
                    <p>{{ $i->DESCRIPCION }}</p>
                    <p><small>Publicado: {{ $i->FECHA }}</small></p>
                    <p><a href="/articulo/{{ $i->ID }}" class="btn btn-primary">Leer mas...</a>
                </div>
                @endforeach
            </div>
        </div>
        <hr>


        @endsection

    </body>
</html>
