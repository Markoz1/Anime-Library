<?php

use App\Models\Tipo;
use Illuminate\Database\Seeder;

class TiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::create([
            'nombre' => 'TV-Serie'
        ]);
        Tipo::create([
            'nombre' => 'OVA'
        ]);
        Tipo::create([
            'nombre' => 'Pelicula'
        ]);
        Tipo::create([
            'nombre' => 'Especial'
        ]);
    }
}
