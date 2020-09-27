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
        @parent
        
        @endsection

        @section("contenido")
        @parent

        
        <div class="row">
            <div class="col-12 mb-2 text-center">
                <h2>Noticias destacadas</h2>
            </div>
        </div>
        <hr>



        <div class="row row-offcanvas row-offcanvas-right">

                <div class="col-12 col-md-9">
                    <div class="row">
                        @foreach($articulos as $i)
                        <div class="col-12 col-md-6 col-lg-4">
                            <h4><strong>{{ $i->NOMBREARTICULO }}</strong></h4>
                            <p>{{ $i->DESCRIPCION }}</p>
                            <p><small>Publicado: {{ $i->FECHA }}</small></p>
                            <p><a href="/articulo/{{ $i->ID }}" class="btn btn-primary">Leer mas...</a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- asider -->
                <div class="col-12 col-md-3 col-sm-12 sidebar-offcanvas" id="sidebar">
                    <h3 id="titulo-rumores">Información destacada:</h3>
                    <div class="list-group">
                        <div class="card">
                            <h4>Intel se disculpa por sus errores</h4>
                            <p>Luego de anunciar que la fabricación de procesadores en 7
                            nanómetros será postergada hasta finales de 2022, el CEO de la 
                            empresa se disculpó por el retraso en la fabricación, aunque la
                            cuota de mercado contra AMD sigue reduciéndose.</p>
                        </div>
                        <div class="card">
                            <h4>AMD asegura que sus tarjetas de video no se agotarán</h4>
                            <p>Luego de que NVIDIA lanzara sus tarjetas gráficas y se agotarán 
                            en muy poco tiempo, produciendo un faltante y una alta demanda, AMD 
                            anunció que sus GPUs saldrán en versiones de 12 y 16GB de memoria y
                            con un alto stock.</p>
                        </div>
                        <div class="card">
                            <h4>NVIDIA suelta rumores de mas GPUs</h4>
                            <p>Distintas empresas asociadas a la fabricación de sus placas de video, 
                            como GALAX, han mostrado nuevas placas de esta generación, entre ellas, 
                            una versión 3060, y una 3080 con 20GB de memoria de video.</p>
                        </div>
                    </div>
                </div>
                <!-- asider -->

        </div>
                
        <hr>


        @endsection

    </body>
</html>
