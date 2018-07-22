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
        $this->call(AnimesTableSeeder::class);
    }
}
