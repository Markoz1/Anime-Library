<?php

use App\Models\FuenteAnime;
use Illuminate\Database\Seeder;

class FuentesAnimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FuenteAnime::create([
            'nombre' => 'Original'
        ]);
        FuenteAnime::create([
            'nombre' => 'Manga'
        ]);  
        FuenteAnime::create([
            'nombre' => 'Videojuego'
        ]);  
        FuenteAnime::create([
            'nombre' => 'Novela Ligera'
        ]);  
        FuenteAnime::create([
            'nombre' => 'Novela Visual'
        ]);  
        FuenteAnime::create([
            'nombre' => 'Manhua Digital'
        ]);
        FuenteAnime::create([
            'nombre' => 'Manga Digital'
        ]);  
        FuenteAnime::create([
            'nombre' => '4-Koma'
        ]);  
        FuenteAnime::create([
            'nombre' => 'Novela'
        ]);  
        FuenteAnime::create([
            'nombre' => 'Juego-Aplicación Movil'
        ]);  
        FuenteAnime::create([
            'nombre' => 'Proyecto Multimedia'
        ]);  
        FuenteAnime::create([
            'nombre' => 'Juguetes-Figuras'
        ]);  
        FuenteAnime::create([
            'nombre' => 'Juego Otome'
        ]);
        FuenteAnime::create([
            'nombre' => 'Juego de Cartas'
        ]);
        FuenteAnime::create([
            'nombre' => 'Video Musical'
        ]);
        FuenteAnime::create([
            'nombre' => 'Libro Ilustrado'
        ]);
        FuenteAnime::create([
            'nombre' => 'CD Drama'
        ]);
        FuenteAnime::create([
            'nombre' => 'Libro'
        ]);    
        FuenteAnime::create([
            'nombre' => 'Manhua'
        ]);
        FuenteAnime::create([
            'nombre' => 'Novela China'
        ]);
        FuenteAnime::create([
            'nombre' => 'Canción Infantil'
        ]);
        FuenteAnime::create([
            'nombre' => 'Otros'
        ]);
    }
}
