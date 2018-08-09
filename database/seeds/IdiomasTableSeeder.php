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
            'imagen' => asset('public/files/idiomas/jpn.png')
        ]);
        Idioma::create([
            'nombre' => 'Castellano',
            'imagen' => asset('public/files/idiomas/spa.png')
        ]);
        Idioma::create([
            'nombre' => 'Latino',
            'imagen' => asset('public/files/idiomas/lat.png')
        ]);
        Idioma::create([
            'nombre' => 'Ingles',
            'imagen' => asset('public/files/idiomas/eng.png')
        ]);
        Idioma::create([
            'nombre' => 'Francés',
            'imagen' => asset('public/files/idiomas/fre.png')
        ]);
        Idioma::create([
            'nombre' => 'Italiano',
            'imagen' => asset('public/files/idiomas/ita.png')
        ]);
        Idioma::create([
            'nombre' => 'Portugués',
            'imagen' => asset('public/files/idiomas/por.png')
        ]);
        Idioma::create([
            'nombre' => 'Coreano',
            'imagen' => asset('public/files/idiomas/kor.png')
        ]);
        Idioma::create([
            'nombre' => 'Chino',
            'imagen' => asset('public/files/idiomas/chi.png')
        ]);
        Idioma::create([
            'nombre' => 'Ruso',
            'imagen' => asset('public/files/idiomas/rus.png')
        ]);
        Idioma::create([
            'nombre' => 'Alemán',
            'imagen' => asset('public/files/idiomas/ger.png')
        ]);
    }
}
