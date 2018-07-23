<?php

use App\Models\Canal;
use Illuminate\Database\Seeder;

class CanalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Canal::create([
            'nombre' => '2.0'
        ]);
        Canal::create([
            'nombre' => '5.1'
        ]);
        Canal::create([
            'nombre' => '7.1'
        ]);
    }
}
