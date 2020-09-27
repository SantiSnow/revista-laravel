<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //
    protected $fillable = [
        "titulo",
        "fecha",
        "descripcion",
        "contenido"
    ];
}
