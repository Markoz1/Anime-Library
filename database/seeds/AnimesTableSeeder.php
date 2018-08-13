<?php

use App\Models\Anime;
use App\Models\Audio;
use App\Models\Canal;
use App\Models\Codec;
use App\Models\Video;
use App\Models\Idioma;
use App\Models\Formato;
use App\Models\Episodio;
use App\Models\Contenedor;
use App\Models\Resolucion;
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
            'titulo' => 'Isekai no Seikishi Monogatari',
            'imagen' => 'nuevo.jpg',
            'sinopsis' => 'Kenshi Masaki es el hermanastro de Tenchi Masaki y solía vivir en Japón hasta que fue convocado a la tierra de Geminar. La Tierra de Geminar ha sido testigo de una cantidad infinita de guerras utilizando los Seikijin, armas biomecánicas controladas por un guerrero apto, llamado Seikishi, que utiliza un poder mágico llamado Ahou. Se descubre que Kenshi es un Seikishi asombroso y parece que alguien tiene una razón para que Kenshi esté en Geminar, pero ¿quién? Y... ¿por qué no lo conocen? ',
            'tipo_id' => 2,
            'episodios' => 13,
            'duracion_ep' => 45,
            'fecha_ini' => date_create('2009-05-22'),
            'fecha_fin' => date_create('2010-05-26'),
            'tamano' => 16514.16,
            'version_id' => 1,
            'temporada_id' => 174,
            'subtitulo_principal_id' => SubtituloPrincipal::create([
                'tipo' => 1,
                'idioma_id' => 2
            ])->id            
        ])
        ->fansubs()->attach(1);
        Audio::create([
            'nombre' => Formato::find(4)->nombre.' '.Canal::find(2)->nombre,
            'anime_id' => 1,
            'idioma_id' => 1,
            'formato_id' => 4,
            'canal_id' => 2
        ]);
        Video::create([
            'nombre' => Resolucion::find(3)->nombre.' '.Contenedor::find(3)->nombre.' '.Codec::find(3)->nombre,
            'anime_id' => 1,
            'codec_id' => 3,
            'contenedor_id' => 3,
            'fuente_id' => 4,
            'resolucion_id' => 3
        ]);
        Episodio::create([
            'ini' => 1,
            'fin' => 13,
            'video_id' => 1
        ]);
        Anime::create([
            'titulo' => 'Hentai Ouji to Warawanai Neko',
            'imagen' => 'nuevo2.jpg',
            'sinopsis' => 'Youto Yokodera es un estudiante de instituto que está más salido que el pico de una mesa, pero cada vez que demuestra lo pervertido que es, sus acciones son malinterpretadas y parecen actos de lo más puros. Sin embargo, Youto está harto de tener esta buena prensa y quiere que lo consideren el marrano que es. Un buen día se entera de que hay una estatua de un gato al cual si se le hace una ofrenda, tus deseos se cumplirán, así que Youto le ofrece uno de sus objetos más preciados: una dakimakura. Mientras pide su deseo, se encuentra con una chica en el mismo lugar, Tsukiko Tsutsukakushi, la cual viene a pedir a la estatua que quiere dejar de sentirse obligada a expresar sus sentimientos en cada ocasión, porque cree que eso la hace parece más infantil. Y así, los dos comienzan su nueva vida tras haber pedido sus deseos.',
            'tipo_id' => 1,
            'episodios' => 12,
            'duracion_ep' => 24,
            'fecha_ini' => date_create('2013-03-13'),
            'fecha_fin' => date_create('2013-06-29'),
            'tamano' => 16514.16,
            'version_id' => 1,
            'temporada_id' => 174,
            'subtitulo_principal_id' => SubtituloPrincipal::create([
                'tipo' => 1,
                'idioma_id' => 3
            ])->id            
        ])
        ->fansubs()->attach([2,3]);
        //->estudios()->attach(527);
        Audio::create([
            'nombre' => Formato::find(2)->nombre.' '.Canal::find(1)->nombre,
            'anime_id' => 2,
            'idioma_id' => 1,
            'formato_id' => 2,
            'canal_id' => 1
        ]);
        Video::create([
            'nombre' => Resolucion::find(3)->nombre.' '.Contenedor::find(3)->nombre.' '.Codec::find(3)->nombre,
            'anime_id' => 2,
            'codec_id' => 3,
            'contenedor_id' => 3,
            'fuente_id' => 1,
            'resolucion_id' => 3
        ]);
        Episodio::create([
            'ini' => 1,
            'fin' => 12,
            'video_id' => 2
        ]);
        Anime::find(1)->hijos()->attach(2, ['tipo_relacion' => 'secuela']);
        Anime::find(2)->hijos()->attach(1, ['tipo_relacion' => 'precuela']);
        Anime::create([
            'titulo' => 'Sword Art Online v2',
            'imagen' => 'nuevo3.jpg',
            'sinopsis' => 'La historia se desarrolla en el año 2022, cuando un videojuego de rol multijugador masivo en línea de realidad virtual llamado Sword Art Online acaba de ser lanzado. 
                        Ahí, los jugadores pueden controlar sus avatares tal como lo harían con sus cuerpos reales por medio del NerveGear, un casco de realidad virtual capaz de estimular sus cinco sentidos a través de sus cerebros. Sin embargo, los jugadores se dan cuenta de que no pueden salir del videojuego; poco tiempo después, el creador de SAO, Akihiko Kayaba, aparece y les informa que si mueren en el mundo virtual también lo harán en el mundo real, así como les revela que para poder salir del juego primero deben superar los cien niveles.
                        A medida que los jugadores tratan de hacer frente a su situación, dos de ellos, Kirito y Asuna, están decididos a ganar y ser libres, a la vez que van desarrollando una relación amorosa.',
            'tipo_id' => 1,
            'episodios' => 25,
            'duracion_ep' => 24,
            'fecha_ini' => date_create('2013-03-13'),
            'fecha_fin' => date_create('2013-06-29'),
            'tamano' => 16514.16,
            'version_id' => 1,
            'temporada_id' => 171,
            'subtitulo_principal_id' => SubtituloPrincipal::create([
                'tipo' => 1,
                'idioma_id' => 3
            ])->id            
        ])
        ->fansubs()->attach([4,5]);
        Audio::create([
            'nombre' => Formato::find(4)->nombre.' '.Canal::find(1)->nombre,
            'anime_id' => 3,
            'idioma_id' => 1,
            'formato_id' => 4,
            'canal_id' => 1
        ]);
        Audio::create([
            'nombre' => Formato::find(3)->nombre.' '.Canal::find(1)->nombre,
            'anime_id' => 3,
            'idioma_id' => 4,
            'formato_id' => 3,
            'canal_id' => 1
        ]);
        Audio::create([
            'nombre' => Formato::find(3)->nombre.' '.Canal::find(1)->nombre,
            'anime_id' => 3,
            'idioma_id' => 2,
            'formato_id' => 3,
            'canal_id' => 1
        ]);
        Video::create([
            'nombre' => Resolucion::find(3)->nombre.' '.Contenedor::find(3)->nombre.' '.Codec::find(3)->nombre,
            'anime_id' => 3,
            'codec_id' => 3,
            'contenedor_id' => 3,
            'fuente_id' => 4,
            'resolucion_id' => 2
        ]);
        Episodio::create([
            'ini' => 1,
            'fin' => 25,
            'video_id' => 3
        ]);
        Anime::create([
            'titulo' => 'D.C.: Da Capo',
            'imagen' => 'nuevo4.jpg',
            'sinopsis' => 'En la isla de Hatsune, con forma de luna creciente, misteriosas flores de cerezo florecen cada año.
                        El protagonista de la historia, Asakura Junnichi, que va a la Academia Kazami, tiene el poder de ver los sueños de los demás cuando duerme. Además, sabe a crear dulces gracias a la magia aprendida de una anciana. 
                        Una noche, Junnichi ve los sueños de otra persona mientras duerme. En ese sueño aparece una niña de su propia infancia. De repente, su hermana Asakura Nemu lo despierta, haciéndolo volver de golpe a la realidad. Namu no tiene ninguna relación de sangre con Junnichi, pero el lazo que los une es más fuerte que el de muchos hermanos y hermanas. Tan profundo que podrían pasar por amantes
                        El siguiente es un día normal en el que le toca madrugar para ir a la Academia Kazami junto a su amiga de la infancia Tenze Mika, el ídolo de la Academia Shirakawa Kotori, las dos hermanas Mizukoshi, Moe y Mika, que solo se comen la salsa del almuerzo por alguna razón... Todo parece normal hasta que Yoshino Sakura, amiga de la infancia que supuestamente se había mudado a América, aparece por sorpresa y les dice: "He vuelto para cumplir la promesa que hice durante nuestra infancia"...',
            'tipo_id' => 1,
            'episodios' => 26,
            'duracion_ep' => 24,
            'fecha_ini' => date_create('2013-03-13'),
            'fecha_fin' => date_create('2013-06-29'),
            'tamano' => 16514.16,
            'version_id' => 1,
            'temporada_id' => 135,
            'subtitulo_principal_id' => SubtituloPrincipal::create([
                'tipo' => 1,
                'idioma_id' => 3
            ])->id            
        ])
        ->fansubs()->attach(6);
        Audio::create([
            'nombre' => Formato::find(1)->nombre.' '.Canal::find(1)->nombre,
            'anime_id' => 4,
            'idioma_id' => 2,
            'formato_id' => 1,
            'canal_id' => 1
        ]);
        Video::create([
            'nombre' => Resolucion::find(11)->nombre.' '.Contenedor::find(1)->nombre.' '.Codec::find(2)->nombre,
            'anime_id' => 4,
            'codec_id' => 2,
            'contenedor_id' => 1,
            'fuente_id' => 2,
            'resolucion_id' => 11
        ]);
        Episodio::create([
            'ini' => 1,
            'fin' => 5,
            'video_id' => 4
        ]);
        Episodio::create([
            'ini' => 7,
            'fin' => 7,
            'video_id' => 4
        ]);
        Episodio::create([
            'ini' => 21,
            'fin' => 21,
            'video_id' => 4
        ]);
        Video::create([
            'nombre' => Resolucion::find(12)->nombre.' '.Contenedor::find(1)->nombre.' '.Codec::find(2)->nombre,
            'anime_id' => 4,
            'codec_id' => 2,
            'contenedor_id' => 1,
            'fuente_id' => 4,
            'resolucion_id' => 12
        ]);
        Episodio::create([
            'ini' => 6,
            'fin' => 6,
            'video_id' => 5
        ]);
        Video::create([
            'nombre' => Resolucion::find(13)->nombre.' '.Contenedor::find(1)->nombre.' '.Codec::find(2)->nombre,
            'anime_id' => 4,
            'codec_id' => 2,
            'contenedor_id' => 1,
            'fuente_id' => 2,
            'resolucion_id' => 13
        ]);
        Episodio::create([
            'ini' => 8,
            'fin' => 20,
            'video_id' => 6
        ]);
        Episodio::create([
            'ini' => 22,
            'fin' => 26 ,
            'video_id' => 6
        ]);
    }
}
