<?php

namespace App\Models;

use App\Models\Tipo;
use App\Models\Audio;
use App\Models\Video;
use App\Models\Estado;
use App\Models\Fansub;
use App\Models\Genero;
use App\Models\Estudio;
use App\Models\Version;
use App\Models\Temporada;
use App\Models\FuenteAnime;
use App\Models\SubtituloPrincipal;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $table = 'animes';
    
    protected $fillable = [
        'titulo', 'imagen', 'sinopsis', 'episodios', 'duracion_ep', 'fecha_ini', 'fecha_fin', 'year', 'tamano', 
        'ordered_chapters', 'tipo_id', 'version_id', 'estado_id', 'temporada_id', 'subtitulo_principal_id'
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
    public function estudios()
    {
        return $this->belongsToMany(Estudio::class);
    }
    /**
     * Audios disponibles para un anime, para todos los episodios
     */
    public function audios()
    {
        return $this->hasMany(Audio::class);
    }
    /**
     * Videos disponibles para un anime, para un rango de episodios
     */
    public function videos()
    {
        return $this->hasMany(Audio::class);
    }
    public function padres()
    {
        return $this->belongsToMany(Anime::class, 'padre_hijo', 'hijo_id', 'padre_id')
        ->withPivot('tipo_relacion')
        ->withTimestamps();
    }
    public function hijos()
    {
        return $this->belongsToMany(Anime::class, 'padre_hijo', 'padre_id', 'hijo_id')
        ->withPivot('tipo_relacion')
        ->withTimestamps();
    }
    public function fuenteAnime()
    {
        return $this->belongsTo(FuenteAnime::class);
    }
}
