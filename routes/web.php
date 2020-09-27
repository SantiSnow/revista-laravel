<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Articulo;
use App\Comentario;
use App\Curso;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    //seo laravel
    SEO::setTitle('Noticias CInformatica');
    SEO::setDescription('Página de noticias de tecnologia, programación, smartphones, computación, videojuegos y más');
    SEO::opengraph()->setUrl('https://www.noticiascinformatica.com');
    SEO::setCanonical('https://noticiascinformatica.com');
    SEO::opengraph()->addProperty('type', 'articles');

    //ultimas noticias
    $articulos = DB::table('articulos')
        ->orderBy('id', 'desc')
        ->limit(6)
        ->get();


    //log-in
    $esAdministrador = false;
    $user=Auth::user();
    if (Auth::check()){
        if ($user->esAdmin()){
            $esAdministrador = true;

            return view('home', compact('esAdministrador'), compact('articulos'));

        }
    }

    return view('welcome', compact('esAdministrador'), compact('articulos'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/busqueda', 'busquedaController@buscar');


Route::get('/articulos/todos', function(){
    $articulos = DB::table('articulos')
        ->orderBy('id', 'desc')
        ->paginate(20);

    return view('articles', ['articles' => $articulos]);

});


Route::get('/articulos', function(){
    $articulos = DB::table('articulos')
        ->orderBy('id', 'desc')
        ->get();

    return view('/articulos', compact('articulos'));
});

Route::get('/sobreNosotros', function(){
    return view('/sobre-nosotros');
});

Route::get('/categorias', function(){
    return view('/categorias');
});


//cada articulo
Route::get('/articulo/{id}', function($id){

    $article = Articulo::find($id);

    $comentarios = DB::table('comentarios')->where('articulo_id', $id)->get();

    return view('articulo', compact('article'), compact('comentarios'));
});

//cada curso
Route::get('/cursos/{id}', function($id){

    $curso = Curso::find($id);

    return view('curso', compact('curso'));
});

//rutas categorias
Route::get('/articulos-computacion', function(){
    $articulos = DB::table('articulos')
        ->where('tags','LIKE','%computacion%')
        ->orderBy('id', 'desc')
        ->get();
    return view('/articulos-computacion', compact('articulos'));
});

Route::get('/articulos-programacion', function(){
    $articulos = DB::table('articulos')
        ->where('tags','LIKE','%programacion%')
        ->orderBy('id', 'desc')
        ->get();
    $cursos = DB::table('cursos')
        ->orderBy('id', 'desc')
        ->get();
    return view('/articulos-programacion', compact('articulos'), compact('cursos'));
});

Route::get('/articulos-smartphones', function(){
    $articulos = DB::table('articulos')
        ->where('tags','LIKE','%smartphones%')
        ->orderBy('id', 'desc')
        ->get();
    return view('/articulos-smartphones', compact('articulos'));
});

Route::get('/articulos-generales', function(){
    $articulos = DB::table('articulos')
        ->where('tags','LIKE','%tecnologia%')
        ->orderBy('id', 'desc')
        ->get();
    return view('/articulos-generales', compact('articulos'));
});


//enviar comentario
Route::post('/comentario', function(Request $req){
    
    $comentario = new Comentario;

    $comentario->nombre = $req->nombre;
    $comentario->comentario = $req->comentario;
    $comentario->articulo_id = $req->id;

    $art_id = $req->id;

    //almacena
    $resultado = $comentario->save();
    //vuelve a la noticia
    if($resultado == 1){
        return redirect('/articulo/' . $art_id);
    }

/*    //	id	nombre	comentario	articulo_id	created_at	updated_at
    $nombre = $req->nombre;
    $comentario = $req->comentario;
    $articulo_id = $req->id;

    DB::table('comentarios')->insert(
        ['nombre' => $nombre, 'comentario' => $comentario, 'articulo_id'=> $articulo_id]
    );

    return redirect('/articulo/' . $articulo_id);
*/
});


//subir articulos:
Route::post('/insertar-art', function(){
    $articulo = new Articulo;
});