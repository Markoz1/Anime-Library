<?php

use App\Models\Estacion;
use Illuminate\Database\Seeder;

class EstacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estacion::create([
            'nombre' => 'Invierno',
        ]);
        Estacion::create([
            'nombre' => 'Primavera',
        ]);
        Estacion::create([
            'nombre' => 'Verano',
        ]);
        Estacion::create([
            'nombre' => 'Otoño',
        ]);
    }
}
