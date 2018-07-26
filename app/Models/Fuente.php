<?php

namespace App\Models;

use App\Models\Video;
use Illuminate\Database\Eloquent\Model;

class Fuente extends Model
{
    protected $table = 'fuentes';
    
    protected $fillable = [
        'nombre'
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
