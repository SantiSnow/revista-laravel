@extends("layouts.template")
@section("navbar")
    
@endsection


@section("header")

@endsection

@section("contenido")
<h4>Resultado de la busqueda</h4>

    @foreach($articulos as $i)

    <img src="public/{{ $i->FOTO }}" alt="imagen descriptiva de la noticia" class="ImagenNoticia">
        <a href="/articulo/{{ $i->ID }}"><h4>{{ $i->NOMBREARTICULO }}</h4></a>
        <p>{{ $i->DESCRIPCION }}</p>
        <p>{{ $i->FECHA}}</p>
        <a href="/articulo/{{ $i->ID }}" class="btn btn-primary">Leer mas...</a>
        <br />
        <hr />
        <br />
    @endforeach

@endsection