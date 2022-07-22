<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //La tabla con la cual el modelo se relaciona
    protected $table = "countries";
    //La clave primaria de la tabla
    protected $primaryKey="country_id";
    //anular campos de auditoria
    public $timestamps = false;
    use HasFactory;
}
