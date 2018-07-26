<?php

namespace App\Models;

use App\Models\Anime;
use App\Models\Idioma;
use Illuminate\Database\Eloquent\Model;

class SubtituloPrincipal extends Model
{
    protected $table = 'subtitulos_principales';

    protected $fillable = [
        'tipo', 'notas_version', 'idioma_id'
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
