<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flujocaja extends Model
{
    use HasFactory;

    protected $table = "flujocajas";

    public function clasificacion(){
        return $this->belongsTo('App\Models\Clasificacion');
    }
}
