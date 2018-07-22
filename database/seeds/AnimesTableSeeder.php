<?php

use App\Models\Anime;
use Illuminate\Database\Seeder;
use App\Models\SubtituloPrincipal;

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
            'tipo' => 2,
            'episodios' => 13,
            'fecha_ini' => date_create('2009-05-22'),
            'fecha_fin' => date_create('2010-05-26'),
            'tamano' => 16514.16,
            'ordered_chapters' => 1,
            'version_id' => 1,
            'subtitulo_principal_id' => SubtituloPrincipal::create([
                'tipo' => 1,
                'idioma_id' => 2
            ])->id            
        ])
        ->fansubs()->attach(1);
        Anime::create([
            'nombre' => 'Hentai Ouji to Warawanai Neko',
            'sinopsis' => 'Youto Yokodera es un estudiante de instituto que está más salido que el pico de una mesa, pero cada vez que demuestra lo pervertido que es, sus acciones son malinterpretadas y parecen actos de lo más puros. Sin embargo, Youto está harto de tener esta buena prensa y quiere que lo consideren el marrano que es. Un buen día se entera de que hay una estatua de un gato al cual si se le hace una ofrenda, tus deseos se cumplirán, así que Youto le ofrece uno de sus objetos más preciados: una dakimakura. Mientras pide su deseo, se encuentra con una chica en el mismo lugar, Tsukiko Tsutsukakushi, la cual viene a pedir a la estatua que quiere dejar de sentirse obligada a expresar sus sentimientos en cada ocasión, porque cree que eso la hace parece más infantil. Y así, los dos comienzan su nueva vida tras haber pedido sus deseos.',
            'tipo' => 1,
            'episodios' => 12,
            'fecha_ini' => date_create('2013-03-13'),
            'fecha_fin' => date_create('2013-06-29'),
            'tamano' => 16514.16,
            'ordered_chapters' => 1,
            'version_id' => 1,
            'temporada_id' => 174,
            'subtitulo_principal_id' => SubtituloPrincipal::create([
                'tipo' => 1,
                'idioma_id' => 3
            ])->id            
        ])
        ->fansubs()->attach([2,3]);
    }
}
