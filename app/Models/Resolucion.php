<?php

namespace App\Models;

use App\Models\Video;
use Illuminate\Database\Eloquent\Model;

class Resolucion extends Model
{
    protected $table = 'resoluciones';
    
    public $fillable = [
        'nombre', 'horizontal', 'vertical'
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
