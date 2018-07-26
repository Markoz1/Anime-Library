<?php

namespace App\Models;

use App\Models\Audio;
use Illuminate\Database\Eloquent\Model;

class Canal extends Model
{
    protected $table = 'canales';
    
    protected $fillable = [
        'nombre'
    ];

    public function audios()
    {
        return $this->hasMany(Audio::class);
    }
}
