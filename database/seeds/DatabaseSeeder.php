<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(VersionesTableSeeder::class);
        $this->call(FansubsTableSeeder::class);
        $this->call(GenerosTableSeeder::class);
        $this->call(EstacionesTableSeeder::class);
        $this->call(YearsTableSeeder::class);
        $this->call(TemporadasTableSeeder::class);
        $this->call(IdiomasTableSeeder::class);
        $this->call(TiposTableSeeder::class);
        $this->call(FormatosTableSeeder::class);
        $this->call(CanalesTableSeeder::class);
        $this->call(CodecsTableSeeder::class);
        $this->call(ContenedoresTableSeeder::class);
        $this->call(FuentesTableSeeder::class);
        $this->call(ResolucionesTableSeeder::class);
        $this->call(EstudiosTableSeeder::class);
        $this->call(FuentesAnimesTableSeeder::class);
        $this->call(PublicosTableSeeder::class);
        $this->call(AnimesTableSeeder::class);
    }
}
