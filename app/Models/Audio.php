<?php

namespace App\Models;

use App\Models\Anime;
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
}
