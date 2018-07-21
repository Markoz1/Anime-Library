<?php

namespace App\Models;

use App\Models\Anime;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    protected $table = 'versiones';
    
    public $fillable = [
        'nombre', 'descripcion'
    ];

    public function animes()
    {
        return $this->hasMany(Anime::class);
    }
}
