<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {!! SEO::generate() !!}

        <style>
            .card{
                margin: 5px;
                padding: 10px;
                text-align: justify;
            }

            #titulo-rumores{
                color: #3385ff;
            }


        </style>
    </head>
    <body>

    @extends("layouts.template")
    @section("navbar")

        
    @endsection


    @section("header")

    @endsection

    @section("contenido")
    <h2>Artículos más recientes</h2>

        
        @foreach($articulos as $i)
        <div class="col-6">
            <img src="../{{ $i->FOTO }}" alt="imagen descriptiva de la noticia" class="ImagenNoticia">
            <a class="titulo-noticia" href="/articulo/{{ $i->ID }}"><h4>{{ $i->NOMBREARTICULO }}</h4></a>
            <p>{{ $i->DESCRIPCION }}</p>
            <p>{{ $i->FECHA}}</p>
            <p><a href="/articulo/{{ $i->ID }}" class="btn btn-primary">Leer mas...</a>
            <br />
            <hr>
        </div>
            <br />
        @endforeach

    @endsection

</body>
</html>