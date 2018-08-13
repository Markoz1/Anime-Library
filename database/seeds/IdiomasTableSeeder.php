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
            'imagen' => asset('files/idiomas/jpn.png')
        ]);
        Idioma::create([
            'nombre' => 'Castellano',
            'imagen' => asset('files/idiomas/spa.png')
        ]);
        Idioma::create([
            'nombre' => 'Latino',
            'imagen' => asset('files/idiomas/lat.png')
        ]);
        Idioma::create([
            'nombre' => 'Ingles',
            'imagen' => asset('files/idiomas/eng.png')
        ]);
        Idioma::create([
            'nombre' => 'Francés',
            'imagen' => asset('files/idiomas/fre.png')
        ]);
        Idioma::create([
            'nombre' => 'Italiano',
            'imagen' => asset('files/idiomas/ita.png')
        ]);
        Idioma::create([
            'nombre' => 'Portugués',
            'imagen' => asset('files/idiomas/por.png')
        ]);
        Idioma::create([
            'nombre' => 'Coreano',
            'imagen' => asset('files/idiomas/kor.png')
        ]);
        Idioma::create([
            'nombre' => 'Chino',
            'imagen' => asset('files/idiomas/chi.png')
        ]);
        Idioma::create([
            'nombre' => 'Ruso',
            'imagen' => asset('files/idiomas/rus.png')
        ]);
        Idioma::create([
            'nombre' => 'Alemán',
            'imagen' => asset('files/idiomas/ger.png')
        ]);
    }
}
