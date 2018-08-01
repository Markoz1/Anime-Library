<?php

namespace App\Models;

use App\Models\Anime;
use Illuminate\Database\Eloquent\Model;

class Publico extends Model
{
    protected $table = 'publicos';
    
    protected $fillable = [
        'nombre'
    ];

    public function animes()
    {
        return $this->hasMany(Anime::class);
    }
}
