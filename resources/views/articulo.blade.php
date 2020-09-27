<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $article->NOMBREARTICULO }} - Noticias Cinformatica</title>

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
            <div class="col-12">
                <h3>{{ $article->NOMBREARTICULO }}</h3>
                <div class="row">{!! $article->CONTENIDO !!}</div>
                <br /><br />
                <p>Publicado el: {{ $article->FECHA }}</p>

                
                <hr>
                <br />
                <br />
                <br />
                <h4>Comentarios:</h4>
                <br />
                
                @foreach($comentarios as $i)
                    <div class="comentario">
                        <p>{{ $i->nombre }}</p>
                        <p>{{ $i->comentario }}</p>
                    </div>
                @endforeach

                <br /><br />
                <br /><br />
                <h4>Dejanos tu comentario:</h4>

                <form class="form-group" method="post" action="{{ url('/comentario') }}">
                @csrf
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required />
                    <br />

                    <input name="id" value="{{$article->ID}}" hidden />

                    <label for="comentario">Comentario</label>
                    <input type="textarea" name="comentario" class="form-control" required />
                    <br />

                    <input type="submit" class="btn btn-primary" value="Enviar comentario" />
                </form>
            </div>
        </section>

        @endsection

        @section("footer")
        @endsection

    </body>
</html>
