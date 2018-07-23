<?php

use App\Models\Formato;
use Illuminate\Database\Seeder;

class FormatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Formato::create([
            'nombre' => 'MP3'
        ]);
        Formato::create([
            'nombre' => 'AAC'
        ]);
        Formato::create([
            'nombre' => 'AC3'
        ]);
        Formato::create([
            'nombre' => 'FLAC'
        ]);
        Formato::create([
            'nombre' => 'Vorbis'
        ]);
    }
}
