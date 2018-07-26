<?php

namespace App\Models;

use App\Models\Anime;
use Illuminate\Database\Eloquent\Model;

class FuenteAnime extends Model
{
    protected $table = 'fuentes_animes';
    
    protected $fillable = [
        'nombre'
    ];

    public function animes()
    {
        return $this->hasMany(Anime::class);
    }
}
