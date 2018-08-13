<?php

namespace App\Models;

use App\Models\Video;
use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    protected $table = 'episodios';

    protected $fillable = [
        'ini', 'fin'
    ];

    public function video()
    {
        return $this->belongsTo(Video::class);
    }

    public function esRango()
    {
        return $this->attributes['ini'] != $this->attributes['fin'];
    }
}
