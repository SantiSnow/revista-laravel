<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redactor extends Model
{
    //en caso de que la relacion sea uno a uno
/*
    public function articulo(){
        return $this->hasOne("App\Articulo");
    }
*/
    public function articulos(){
        return $this->hasMany("App\Articulo");
    }
}
