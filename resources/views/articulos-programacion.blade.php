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

    <div class="row">
        <div class="col-6">
        <h2>Artículos más recientes</h2>
        <br />
        @foreach($articulos as $i)
        
            <img src="../{{ $i->FOTO }}" alt="imagen descriptiva de la noticia" class="ImagenNoticia">
            <a class="titulo-noticia" href="/articulo/{{ $i->ID }}"><h4>{{ $i->NOMBREARTICULO }}</h4></a>
            <p>{{ $i->DESCRIPCION }}</p>
            <p>Publicado: {{ $i->FECHA}}</p>
            <p><a href="/articulo/{{ $i->ID }}" class="btn btn-primary">Leer mas...</a>
            <br />
            <hr>
            <br />
        @endforeach
        </div>
        <div class="col-6">
        <h2>Cursos de programación e informática</h2>
        <br />

        @foreach($cursos as $j)

            <img src="Articulos/programacionCursoPOO.jpg" alt="imagen descriptiva del cursos" class="ImagenNoticia">
            <a class="titulo-noticia" href="/cursos/{{ $j->id }}"><h4>{{ $j->titulo }}</h4></a>
            <p>{{ $j->descripcion }}</p>
            <p>Publicado: {{ $j->fecha }}</p>
            <p><a href="/cursos/{{ $j->id }}" class="btn btn-primary">Leer mas...</a>
            <br />
            <hr>
            <br />

        @endforeach
       
        </div>
    </div>

    @endsection

</body>
</html>