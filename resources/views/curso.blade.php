<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $curso->titulo }} - Noticias Cinformatica</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>

            .Imagen-perfil{
                width: 100%;
            }

            .comentario{
                border-radius: 5px;
                padding: 15px;
                background-color: #e6f2ff;
                margin: 10px;
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
        @parent
        <section>
            <div class="d-flex justify-content-center">
                <div class="col-md-9">
                    <h3>{{ $curso->titulo }}</h3>
                    <div class="row">{!! $curso->contenido !!}</div>
                    <br /><br />
                    <p>Publicado el: {{ $curso->fecha }}</p>

                    
                    <hr>
                    <br />
                    <br />
                    <br />
                </div>
            </div>

        </section>

        @endsection

        @section("footer")
        @endsection

    </body>
</html>
