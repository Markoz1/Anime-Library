<?php

use App\Models\Idioma;
use Illuminate\Database\Seeder;

class IdiomasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Idioma::create([
            'nombre' => 'Japonés',
            'abreviacion' => 'jpn'
        ]);
        Idioma::create([
            'nombre' => 'Castellano',
            'abreviacion' => 'spa'
        ]);
        Idioma::create([
            'nombre' => 'Latino',
            'abreviacion' => 'lat'
        ]);
        Idioma::create([
            'nombre' => 'Ingles',
            'abreviacion' => 'eng'
        ]);
        Idioma::create([
            'nombre' => 'Francés',
            'abreviacion' => 'fre'
        ]);
        Idioma::create([
            'nombre' => 'Italiano',
            'abreviacion' => 'ita'
        ]);
        Idioma::create([
            'nombre' => 'Portugués',
            'abreviacion' => 'por'
        ]);
        Idioma::create([
            'nombre' => 'Coreano',
            'abreviacion' => 'kor'
        ]);
        Idioma::create([
            'nombre' => 'Chino',
            'abreviacion' => 'chi'
        ]);
        Idioma::create([
            'nombre' => 'Ruso',
            'abreviacion' => 'rus'
        ]);
        Idioma::create([
            'nombre' => 'Alemán',
            'abreviacion' => 'ger'
        ]);
    }
}
