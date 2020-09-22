<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //
    protected $fillable = [
        'nombre',
        'articulo_id',
        'coment'
    ];

    public function articulos(){
        return $this->belongsTo("App\Articulo");
    }

}
