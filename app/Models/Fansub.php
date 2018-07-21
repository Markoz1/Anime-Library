<?php

namespace App\Models;

use App\Models\Anime;
use Illuminate\Database\Eloquent\Model;

class Fansub extends Model
{
    protected $table = 'fansubs';
    
    public $fillable = [
        'nombre', 'abreviacion'
    ];

    public function animes()
    {
        return $this->belongsToMany(Anime::class);
    }
}
