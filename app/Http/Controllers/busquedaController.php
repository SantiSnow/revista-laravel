<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class busquedaController extends Controller
{
    //
    public function buscar(Request $req){


        $tag = $req->get('buscar');

        $articulos = DB::table('articulos')->where('tags','LIKE','%'.$tag.'%')->orderBy('id', 'desc')->get();

        return view('/pagina-busqueda', compact('articulos'));
    }


    
}
