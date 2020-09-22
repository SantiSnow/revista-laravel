<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //
    protected $fillable = [
        'NOMBREARTICULO',
        'URL',
        'DESCRIPCION',
        'FOTO',
        'redactor_id',
        'TAGS',
        'FECHA',
        'CONTENIDO'
    ];

    public function comentarios(){
        return $this->hasMany("App\Comentario", "articulo_id");
    }
}
