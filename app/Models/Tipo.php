<?php

namespace App\Models;

use App\Models\Anime;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipos';
    
    protected $fillable = [
        'nombre'
    ];

    public function animes()
    {
        return $this->hasMany(Anime::class);
    }
}
