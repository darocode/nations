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
    //Relacion entre continente y paises

    //Continente: abuelo
    //Region: PAPA
    //Country : nieto

    public function paises(){

        /*Parameters
            1-nieto
            2-papa
            3 FK del abuelo en el papa
            4- FK del papa en el nieto
        
        */

        return $this->hasManyThrough(Country::class, Region::class, 'continent_id','region_id');

    }
}
