<?php

namespace App\Models;

use App\Models\Video;
use Illuminate\Database\Eloquent\Model;

class Resolucion extends Model
{
    protected $table = 'resoluciones';
    
    protected $fillable = [
        'nombre', 'horizontal', 'vertical', 'cantidad_pixeles'
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
