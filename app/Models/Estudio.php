<?php

namespace App\Models;

use App\Models\Anime;
use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    protected $table = 'estudios';
    
    protected $fillable = [
        'nombre'
    ];

    public function animes()
    {
        return $this->belongsToMany(Anime::class);
    }
}
