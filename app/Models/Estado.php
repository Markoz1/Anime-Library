<?php

namespace App\Models;

use App\Models\Anime;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';
    
    public $fillable = [
        'nombre', 'descripcion'
    ];

    public function animes()
    {
        return $this->hasMany(Anime::class);
    }
}
