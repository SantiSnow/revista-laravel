<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>

            

        </style>
    </head>
    <body>
        @extends("layouts.template")
        @section("navbar")
        
        @endsection

        @section("header")

        
        @endsection

        @section("contenido")
        @parent
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mt-4 mb-2 text-center">
                    <h2 id="titulo5" class="negro">Categorias</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-6 col-md-6">
                    <h4><a href="{{ url('/articulos-programacion') }}">Programacion</a></h4>
                    <blockquote class="blockquote">
                    <p class="mb-0">Encontra aca cursos, noticias, descargas, guias y otros para desarrolladores y programadores.</p>
                    </blockquote>
                </div>
                <div class="col-sm-6 col-lg-6 col-md-6">
                    <h4><a href="{{ url('/articulos-computacion') }}">Computación, Hardware, Informatica</a></h4>
                    <blockquote class="blockquote">
                    <p class="mb-0">Enterate de las ultimas noticias sobre software, hardware y todo en el mundo de la informatica.</p>
                    </blockquote>
                </div>
                <div class="col-sm-6 col-lg-6 col-md-6">
                    <h4><a href="{{ url('/articulos-smartphones') }}">Reviews/Smartphones</a></h4>
                    <blockquote class="blockquote">
                    <p class="mb-0">Antes de comprar algun dispositivo, lo mejor siempre es ver la opinion de un experto.</p>
                    </blockquote>
                </div>
                <div class="col-sm-6 col-lg-6 col-md-6">
                    <h4><a href="{{ url('/articulos-generales') }}">Noticias generales</a></h4>
                    <blockquote class="blockquote">
                    <p class="mb-0">Noticias sobre actualidad, descubrimientos, invenciones, leyes, ecologia, entre otros.</p>
                    </blockquote>
                </div>
            </div>
        </div>

        @endsection

    </body>
</html>
