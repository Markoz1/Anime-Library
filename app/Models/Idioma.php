<?php

namespace App\Models;

use App\Models\SubtituloPrincipal;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table = 'idiomas';
    
    public $fillable = [
        'nombre', 'abreviacion'
    ];

    public function subtitulosPrincipales()
    {
        return $this->hasMany(SubtituloPrincipal::class);
    }
}
