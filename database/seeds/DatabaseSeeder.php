<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            DeleteTableSeeder::class,
            TypeTableSeeder::class,
            TypeUniteTableSeeder::class,
            NiveauTableSeeder::class,
            PrivilegeTableSeeder::class,
            EnseignantTableSeeder::class,
            AppareilTableSeeder::class,
            UniteTableSeeder::class,
            PlageUniteTableSeeder::class,
            ThemeTableSeeder::class,
            PartieThemeTableSeeder::class,
            SeanceTableSeeder::class
            ]);


    }
}
