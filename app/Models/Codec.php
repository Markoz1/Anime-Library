<?php

namespace App\Models;

use App\Models\Video;
use Illuminate\Database\Eloquent\Model;

class Codec extends Model
{
    protected $table = 'codecs';
    
    protected $fillable = [
        'nombre', 'profundidad_color'
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
