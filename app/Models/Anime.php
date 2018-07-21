<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $table = 'animes';
    
    public $fillable = [
        'nombre', 'sinopsis', 'tipo', 'year', 'tamano', 'ordered_chapters', 'version', 'estado'
    ];
}
