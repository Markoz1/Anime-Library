<?php

namespace App\Models;

use App\Models\Anime;
use App\Models\Idioma;
use Illuminate\Database\Eloquent\Model;

class SubtituloPrincipal extends Model
{
    protected $table = 'subtitulos_principales';

    public $fillable = [
        'tipo', 'notas_version'
    ];

    public function anime()
    {
        return $this->hasOne(Anime::class);
    }
    public function idioma()
    {
        return $this->belongsTo(Idioma::class);
    }
}
