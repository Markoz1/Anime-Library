<?php

namespace App\Models;

use App\Models\Audio;
use Illuminate\Database\Eloquent\Model;

class Formato extends Model
{
    protected $table = 'formatos';
    
    public $fillable = [
        'nombre'
    ];

    public function audios()
    {
        return $this->hasMany(Audio::class);
    }
}
