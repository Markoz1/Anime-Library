<?php

namespace App\Models;

use App\Models\Video;
use Illuminate\Database\Eloquent\Model;

class Contenedor extends Model
{
    protected $table = 'contenedores';
    
    public $fillable = [
        'nombre'
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
