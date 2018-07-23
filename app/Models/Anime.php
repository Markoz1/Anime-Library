<?php

namespace App\Models;

use App\Models\Tipo;
use App\Models\Estado;
use App\Models\Fansub;
use App\Models\Genero;
use App\Models\Version;
use App\Models\Temporada;
use App\Models\SubtituloPrincipal;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $table = 'animes';
    
    public $fillable = [
        'nombre', 'sinopsis', 'tipo', 'year', 'tamano', 'ordered_chapters', 'estado'
    ];

    public function version()
    {
        return $this->belongsTo(Version::class);
    }
    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
    public function fansubs()
    {
        return $this->belongsToMany(Fansub::class);
    }
    public function generos()
    {
        return $this->belongsToMany(Genero::class);
    }
    public function temporada()
    {
        return $this->belongsTo(Temporada::class);
    }
    public function subtituloPrincipal()
    {
        return $this->belongsTo(SubtituloPrincipal::class);
    }
    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }
}
