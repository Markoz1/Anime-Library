<?php

namespace App\Models;

use App\Models\Temporada;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $table = 'years';

    protected $fillable = [
        'nombre'
    ];

    public function temporadas()
    {
        return $this->hasMany(Temporada::class);
    }
}
