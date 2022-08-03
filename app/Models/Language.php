<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table ="languages";

    protected $primaryKey = "language_id";

    public $timestaps = false;
    use HasFactory;

    public function countries(){
        return $this->belongsToMany(Country::class,'country_languages','language_id','country_id');
    }

}
