<?php

namespace App\Models;

use App\Models\Anime;
use App\Models\Estacion;
use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    protected $table = 'temporadas';

    protected $fillable = [
        'nombre', 'estacion_id', 'year_id'
    ];

    public function animes()
    {
        return $this->hasMany(Anime::class);
    }
    public function estacion()
    {
        return $this->belongsTo(Estacion::class);
    }
    public function year()
    {
        return $this->belongsTo(Year::class);
    }
    public function abreviacion(){
        $abreviacion;
        if ($this->attributes['estacion_id'] === 1) {
            $abreviacion = 'Inv';
        } elseif ($this->attributes['estacion_id'] === 2) {
            $abreviacion = 'Prim';
        } elseif ($this->attributes['estacion_id'] === 3) {
            $abreviacion = 'Ver';
        } else {
            $abreviacion = 'Oto';
        }
        
    }
}
