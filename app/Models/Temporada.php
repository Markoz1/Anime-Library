<?php

namespace App\Models;

use App\Models\Anime;
use App\Models\Estacion;
use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    protected $table = 'temporadas';

    public $fillable = [
        'nombre'
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
}
