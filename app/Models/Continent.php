<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //la tabla a conectar

    protected $table ="continents";

    //clave primaria de la tabla

    protected $primaryKey = "continent_id";



    //omitir campos de auditoria
    public $timestaps = false;
    use HasFactory;

    //Relacion entre continente y sus regiones

    public function regiones(){

        // parameters
        // 1. Linked model
        // 2. Foreign key of current model 
        // into related model Region
        return $this->hasMany(Region::class,'continent_id');
    }
}
