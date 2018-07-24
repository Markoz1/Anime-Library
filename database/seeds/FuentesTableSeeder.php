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
            'nombre' => 'HDTV'
        ]);
        Fuente::create([
            'nombre' => 'SDTV'
        ]);
        Fuente::create([
            'nombre' => 'WEB'
        ]);
        Fuente::create([
            'nombre' => 'Bluray'
        ]);
        Fuente::create([
            'nombre' => 'DVD'
        ]);
        Fuente::create([
            'nombre' => 'VHS'
        ]);
    }
}
