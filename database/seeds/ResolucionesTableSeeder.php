<?php

use App\Models\Resolucion;
use Illuminate\Database\Seeder;

class ResolucionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resolucion::create([
            'nombre' => '3840x2160',
            'horizontal' => 3840,
            'vertical' => 2160,
            'cantidad_pixeles' => 3840*2160
        ]);
        Resolucion::create([
            'nombre' => '1920x1080',
            'horizontal' => 1920,
            'vertical' => 1080,
            'cantidad_pixeles' => 1920*1080
        ]);
        Resolucion::create([
            'nombre' => '1280x720',
            'horizontal' => 1280,
            'vertical' => 720,
            'cantidad_pixeles' => 1280*720
        ]);
        Resolucion::create([
            'nombre' => '960x720',
            'horizontal' => 960,
            'vertical' => 720,
            'cantidad_pixeles' => 960*720
        ]);
        Resolucion::create([
            'nombre' => '1024x576',
            'horizontal' => 1024,
            'vertical' => 576,
            'cantidad_pixeles' => 1024*576
        ]);
        Resolucion::create([
            'nombre' => '848x480',
            'horizontal' => 848,
            'vertical' => 480,
            'cantidad_pixeles' => 848*480
        ]);
        Resolucion::create([
            'nombre' => '640x480',
            'horizontal' => 640,
            'vertical' => 480,
            'cantidad_pixeles' => 640*480
        ]);
        Resolucion::create([
            'nombre' => '720x480',
            'horizontal' => 720,
            'vertical' => 480,
            'cantidad_pixeles' => 720*480
        ]);
        Resolucion::create([
            'nombre' => '720x400',
            'horizontal' => 720,
            'vertical' => 400,
            'cantidad_pixeles' => 720*400
        ]);
        Resolucion::create([
            'nombre' => '704x396',
            'horizontal' => 704,
            'vertical' => 396,
            'cantidad_pixeles' => 704*396
        ]);         
        Resolucion::create([
            'nombre' => '640x360',
            'horizontal' => 640,
            'vertical' => 360,
            'cantidad_pixeles' => 640*360
        ]);
    }
}
