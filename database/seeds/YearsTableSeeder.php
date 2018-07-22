<?php

use App\Models\Year;
use Illuminate\Database\Seeder;

class YearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1970; $i <= 2018; $i++) { 
            Year::create([
                'nombre' => $i
            ]);
        }
    }
}
