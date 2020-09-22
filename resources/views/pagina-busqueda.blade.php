@extends("layouts.template")
@section("navbar")
    
@endsection


@section("header")

@endsection

@section("contenido")
<h4>Resultado de la busqueda</h4>

    @foreach($articulos as $i)

        <img src="../{{ $i->FOTO }}" alt="imagen descriptiva de la noticia" class="ImagenNoticia">
        <p>{{ $i->NOMBREARTICULO }}</p>
        <p>{{ $i->DESCRIPCION }}</p>
        <p>{{ $i->FECHA}}</p>
        <a href="{{ $i->URL }}" class="btn btn-primary">Leer mas...</a>
        <br />
        <hr />
        <br />
    @endforeach

@endsection