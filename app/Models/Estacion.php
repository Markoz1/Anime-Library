<?php

namespace App\Models;

use App\Models\Temporada;
use Illuminate\Database\Eloquent\Model;

class Estacion extends Model
{
    protected $table = 'estaciones';

    protected $fillable = [
        'nombre'
    ];

    public function temporadas()
    {
        return $this->hasMany(Temporada::class);
    }
}
