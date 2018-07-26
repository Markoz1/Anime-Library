<?php

namespace App\Models;

use App\Models\Anime;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';
    
    protected $fillable = [
        'nombre', 'descripcion', 'color'
    ];

    public function animes()
    {
        return $this->hasMany(Anime::class);
    }
}
