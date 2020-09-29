<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    //relacion varios a varios polimorfica
    public function comentarios(){
        return $this->morphMany("App\Comentario", "comentable");
    }
}
