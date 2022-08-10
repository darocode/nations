<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table ="regions";
    protected $primaryKey = "region_id";

    public $timestaps = false;
    use HasFactory;

    //1 to m : Region - Country
    // Relationship

    public function countries(){
        return $this->hasMany(Country::class,'region_id');
    } 
    public function continent(){

        return $this->belongsTo(Continent::class,'continent_id');
    }
}
