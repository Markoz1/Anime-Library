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
        $this->call(AnimesTableSeeder::class);
    }
}
