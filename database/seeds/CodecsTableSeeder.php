<?php

use App\Models\Codec;
use Illuminate\Database\Seeder;

class CodecsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Codec::create([
            'nombre' => 'Xvid',
            'profundidad_color' => '8 bits'
        ]);
        Codec::create([
            'nombre' => 'DivX',
            'profundidad_color' => '8 bits'
        ]);
        Codec::create([
            'nombre' => 'H264',
            'profundidad_color' => '8 bits'
        ]);
        Codec::create([
            'nombre' => 'H264',
            'profundidad_color' => '10 bits'
        ]);
        Codec::create([
            'nombre' => 'H265',
            'profundidad_color' => '8 bits'
        ]);
        Codec::create([
            'nombre' => 'H265',
            'profundidad_color' => '10 bits'
        ]);
    }
}
