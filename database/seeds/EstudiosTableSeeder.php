<?php

use App\Models\Estudio;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class EstudiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::load('public\files\Estudios.csv', function($reader) {
     		foreach ($reader->get() as $book) {
                Estudio::create([
                    'nombre' => $book->nombre
                ]);
      		}
		});
    }
}
