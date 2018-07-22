<?php

use App\Models\Genero;
use Illuminate\Database\Seeder;

class GenerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genero::create([
            'nombre' => 'Acción',
        ]);
        Genero::create([
            'nombre' => 'Ecchi‌',
        ]);
        Genero::create([
            'nombre' => 'Harem‌',
        ]);
    }
}
