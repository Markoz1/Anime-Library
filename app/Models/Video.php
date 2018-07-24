<?php

namespace App\Models;

use App\Models\Anime;
use App\Models\Codec;
use App\Models\Contenedor;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    public $fillable = [
        'nombre'
    ];

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }
    public function codec()
    {
        return $this->belongsTo(Codec::class);
    }
    public function contenedor()
    {
        return $this->belongsTo(Contenedor::class);
    }
}
