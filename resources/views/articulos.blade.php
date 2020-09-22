
@extends("layouts.template")
@section("navbar")

    
@endsection


@section("header")

@endsection

@section("contenido")
<h4>Artículos más recientes</h4>

    @foreach($articulos as $i)

        <p>{{ $i->NOMBREARTICULO }}</p>
        <p>{{ $i->DESCRIPCION }}</p>
        <p>{{ $i->FECHA}}</p>
        <p><a href="/articulo/{{ $i->ID }}" class="btn btn-primary">Leer mas...</a>
        <br />
        <br />
        

    @endforeach

@endsection