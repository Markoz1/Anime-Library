<?php

use App\Models\Fansub;
use Illuminate\Database\Seeder;

class FansubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fansub::create([
            'nombre' => 'AnimeRakuen',
        ]);
        Fansub::create([
            'nombre' => 'Mabushii Fansub',
        ]);
        Fansub::create([
            'nombre' => 'Hoshizora',
        ]);
        Fansub::create([
            'nombre' => 'Silviu555',
        ]);
        Fansub::create([
            'nombre' => 'XzDres',
        ]);
        Fansub::create([
            'nombre' => 'Meiji no Fansub',
        ]);
    }
}
