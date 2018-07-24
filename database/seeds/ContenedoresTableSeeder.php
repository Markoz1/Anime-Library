<?php

use App\Models\Contenedor;
use Illuminate\Database\Seeder;

class ContenedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contenedor::create([
            'nombre' => 'AVI'
        ]);
        Contenedor::create([
            'nombre' => 'MP4'
        ]);
        Contenedor::create([
            'nombre' => 'MKV'
        ]);
        Contenedor::create([
            'nombre' => 'FLV'
        ]);
    }
}
