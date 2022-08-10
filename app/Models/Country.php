<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
     //la tabla a conectar

     protected $table ="countries";

     //clave primaria de la tabla
 
     protected $primaryKey = "country_id";
 
     //omitir campos de auditoria
     public $timestaps = false;
    use HasFactory;

    //1. Related Model
    //2. Pivot table(intermediate table)
    //3. Foreign key of current model
    //4. Foreign key of current model

    public function languages(){
        return $this->belongsToMany(Language::class,'country_languages','country_id','language_id')->withPivot('official');
    } 

    public function regions(){
        //Belongs to method :Parameters
        //1. Related Model
        //2. Foreign key of related model in current model
        
        return $this->belongsTo(Region::class,'region_id');
    }

}
