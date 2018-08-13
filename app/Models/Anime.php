<?php

namespace App\Models;

use App\Models\Tipo;
use App\Models\Audio;
use App\Models\Video;
use App\Models\Estado;
use App\Models\Fansub;
use App\Models\Genero;
use App\Models\Estudio;
use App\Models\Publico;
use App\Models\Version;
use App\Models\Temporada;
use App\Models\FuenteAnime;
use App\Models\SubtituloPrincipal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection as Collection;

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
        return $this->hasMany(Video::class);
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
    public function publico()
    {
        return $this->belongsTo(Publico::class);
    }
    public function agruparFuentes()
    {
        $fuentes = new Collection;
        if ($this->videos->count() === 1) {
            $fuente = new Collection;
            $fuente->put('nombre', $this->videos->first()->fuente->nombre);            
            $fuente->put('imagen', $this->videos->first()->fuente->imagen);            
            $episodios = new Collection;
            $episodio = new Collection;
            $episodio->put('ini', $this->videos->first()->episodios->first()->ini);
            $episodio->put('fin', $this->videos->first()->episodios->last()->fin);
            $episodios->push($episodio);
            $fuente->push($episodios);
            $fuentes->push($fuente);
        } else {
            $grupos = $this->crearCollection();
            foreach ($grupos as $grupo) {
                $fuente = new Collection;
                $informacion = $grupo->first();
                $fuente->put('nombre',$informacion->get('nombre'));
                $fuente->put('imagen',$informacion->get('imagen'));
                $grupo->forget(0);
                $fuente->push($this->agruparEpisodios($grupo));
                $fuentes->push($fuente);
            }
        }
        return $fuentes;
    }
    public function agruparEpisodios(Collection $grupo)
    {
        $grupo = $grupo->values();
        $episodiosAgrupado = new Collection;
        $i = 0;
        while(!$grupo->isEmpty()){
            $k = 0;
            $terminoGrupo = false;
            while(!$terminoGrupo){
                $episodio = $grupo->get($i)->get($k);
                $cont = $i;
                $terminoWhile = false;
                $episodioAgregado = false;
                while ($grupo->has($cont+1) && !$terminoWhile) {
                        foreach ($grupo->get($cont+1) as $j => $episodioNext) {
                            $agrupacionExitosa = false;                           
                            if($episodio->get('fin')+1 == $episodioNext->get('ini')){                                                               
                                $nuevo = new Collection;                                
                                $nuevo->put('ini', $episodio->get('ini'));
                                $nuevo->put('fin', $episodioNext->get('fin'));   
                                $agrupacionExitosa = true; 
                            }
                            elseif($episodioNext->get('fin')+1 == $episodio->get('ini')) {                                                                  
                                    $nuevo = new Collection;
                                    $nuevo->put('ini', $episodioNext->get('ini'));
                                    $nuevo->put('fin', $episodio->get('fin'));
                                    $agrupacionExitosa = true;    
                            }
                            if($agrupacionExitosa){
                                $nuevoGrupo = new Collection;
                                $nuevoGrupo->push($nuevo);
                                $grupo->push($nuevoGrupo); 
                                                                                         
                                $episodioAgregado = true;
                                $terminoWhile = true;
                                $grupo->get($cont+1)->forget($j);
                                if($grupo->get($cont+1)->isEmpty()){
                                    $grupo->forget($cont+1);
                                    $grupo = $grupo->values();
                                }                                
                                $grupo->get($i)->forget($k);
                                if($grupo->get($i)->isEmpty()){
                                    $grupo->forget($i);
                                    $grupo = $grupo->values();
                                    $terminoGrupo = true;
                                }                                 
                                break;
                            }                            
                        }
                    $cont++;                    
                }                
                if(!$episodioAgregado){                     
                    $episodiosAgrupado->push($episodio);
                    $grupo->get($i)->forget($k);
                    if($grupo->get($i)->isEmpty()){
                        $grupo->forget($i);
                        $grupo = $grupo->values();
                        $terminoGrupo = true;
                    }
                }
                $k++;                
            }
        }
        $episodiosAgrupado = $episodiosAgrupado->sortBy(function ($episodio, $key) {
            return $episodio->get('ini'); 
        });
        return $episodiosAgrupado;
    }
    public function crearCollection()
    {
        $coleccion = new Collection;
        $videosAgrupados =  $this->videos->groupBy('fuente_id');
        foreach ($videosAgrupados as $itemGrupo) {
            $grupo = new Collection;
            foreach ($itemGrupo as $key => $itemVideo) {
                if($key === 0){
                    $informacion = new Collection;
                    $informacion->put('nombre',$itemVideo->fuente->nombre);
                    $informacion->put('imagen',$itemVideo->fuente->imagen);
                    $grupo->push($informacion);
                }
                $video = new Collection;
                foreach ($itemVideo->episodios as $key => $itemEpisodio) {
                    $episodios = new Collection;
                    $episodios->put('ini', $itemEpisodio->ini);
                    $episodios->put('fin', $itemEpisodio->fin);
                    $video->push($episodios);
                }                
                $grupo->push($video);
            }
            $coleccion->push($grupo);
        }
        return $coleccion;
    }
}
