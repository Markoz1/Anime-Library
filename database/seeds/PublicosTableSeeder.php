<?php

use App\Models\Publico;
use Illuminate\Database\Seeder;

class PublicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publico::create([
            'nombre' => 'Kodomo'
        ]);
        Publico::create([
            'nombre' => 'Shounen'
        ]);
        Publico::create([
            'nombre' => 'Shoujo'
        ]);
        Publico::create([
            'nombre' => 'Seinen'
        ]);
        Publico::create([
            'nombre' => 'Josei'
        ]);
    }
}
