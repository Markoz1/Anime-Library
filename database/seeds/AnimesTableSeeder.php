<?php

use App\Models\Anime;
use Illuminate\Database\Seeder;

class AnimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anime::create([
            'nombre' => 'Isekai no Seikishi Monogatari',
            'sinopsis' => 'Kenshi Masaki es el hermanastro de Tenchi Masaki y solía vivir en Japón hasta que fue convocado a la tierra de Geminar. La Tierra de Geminar ha sido testigo de una cantidad infinita de guerras utilizando los Seikijin, armas biomecánicas controladas por un guerrero apto, llamado Seikishi, que utiliza un poder mágico llamado Ahou. Se descubre que Kenshi es un Seikishi asombroso y parece que alguien tiene una razón para que Kenshi esté en Geminar, pero ¿quién? Y... ¿por qué no lo conocen? ',
            'tipo' => 'TV-Serie',
            'year' => '2009',
            'tamano' => 16514.16,
            'ordered_chapters' => 1
        ]);
    }
}
