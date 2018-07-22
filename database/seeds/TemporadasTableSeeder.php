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
        $years = Year::all();
        $estaciones = Estacion::all();
        foreach ($years as $year) {
            foreach ($estaciones as $estacion) {
                Temporada::create([
                    'nombre' => $estacion->nombre.' '.$year->nombre,
                    'estacion_id' => $estacion->id,
                    'year_id' => $year->id,
                ]);
            }
        }
    }
}
