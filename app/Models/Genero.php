<?php

namespace App\Models;

use App\Models\Anime;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'generos';
    
    protected $fillable = [
        'nombre', 'es_anime'
    ];

    public function animes()
    {
        return $this->belongsToMany(Anime::class);
    }
}
