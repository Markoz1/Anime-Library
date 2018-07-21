<?php

use App\Models\Version;
use Illuminate\Database\Seeder;

class VersionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Version::create([
            'nombre' => 'Unica',
            'descripcion' => 'Unica versión'
        ]);
        Version::create([
            'nombre' => 'Mejor',
            'descripcion' => 'Mejor versión'
        ]);
        Version::create([
            'nombre' => 'Buena',
            'descripcion' => 'Buena versión'
        ]);
    }
}
