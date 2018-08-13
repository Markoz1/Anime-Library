<?php

use App\Models\Fuente;
use Illuminate\Database\Seeder;

class FuentesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fuente::create([
            'nombre' => 'HDTV',
            'imagen' => asset('files/fuentes/hdtv.png')
        ]);
        Fuente::create([
            'nombre' => 'SDTV',
            'imagen' => asset('files/fuentes/sdtv.png')
        ]);
        Fuente::create([
            'nombre' => 'WEB',
            'imagen' => asset('files/fuentes/web.png')
        ]);
        Fuente::create([
            'nombre' => 'Bluray',
            'imagen' => asset('files/fuentes/bluray.png')
        ]);
        Fuente::create([
            'nombre' => 'DVD',
            'imagen' => asset('files/fuentes/dvd.png')
        ]);
        Fuente::create([
            'nombre' => 'VHS',
            'imagen' => asset('files/fuentes/vhs.png')
        ]);
    }
}
