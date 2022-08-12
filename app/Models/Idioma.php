<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
      //La tabla con la cual el modelo se relaciona
      protected $table = "languages";
      //La clave primaria de la tabla
      protected $primaryKey="language_id";
      //anular campos de auditoria
      public $timestamps = false;
      use HasFactory;

      //relacion M:M con paises(Country)
      public function paises(){
        //belongsToMay 1: Modelo a relacionar, 2: establecer la tabla "pivot" 
        //3: la clave foranea del modelo actual en el pivote 
        //4: la clave foranea en el modelo a relacionar en el pivote
        return $this->belongsToMany(Country::class, 'country_languages', 'language_id', 'country_id')->withPivot('official');
      }
      
}
