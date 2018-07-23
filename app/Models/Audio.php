<?php

namespace App\Models;

use App\Models\Anime;
use App\Models\Canal;
use App\Models\Idioma;
use App\Models\Formato;
use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    protected $table = 'audios';
    
    public $fillable = [
        'nombre'
    ];

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }
    public function idioma()
    {
        return $this->belongsTo(Idioma::class);
    }
    public function formato()
    {
        return $this->belongsTo(Formato::class);
    }
    public function canal()
    {
        return $this->belongsTo(Canal::class);
    }
}
