<?php

namespace App\Models;

use App\Models\Estado;
use App\Models\Version;
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
}
