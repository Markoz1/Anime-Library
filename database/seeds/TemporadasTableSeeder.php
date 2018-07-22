<?php

use App\Models\Year;
use App\Models\Estacion;
use App\Models\Temporada;
use Illuminate\Database\Seeder;

class TemporadasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estacion = Estacion::find(2);
        $year = Year::find(44);
        Temporada::create([
            'nombre' => $estacion->nombre.' '.$year->nombre,
            'estacion_id' => 2,
            'year_id' => 44
        ]);
    }
}
