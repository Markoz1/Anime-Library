<?php

namespace App\Models;

use App\Models\Audio;
use App\Models\SubtituloPrincipal;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table = 'idiomas';
    
    protected $fillable = [
        'nombre', 'imagen'
    ];

    public function subtitulosPrincipales()
    {
        return $this->hasMany(SubtituloPrincipal::class);
    }
    public function audios()
    {
        return $this->hasMany(Audio::class);
    }
}
