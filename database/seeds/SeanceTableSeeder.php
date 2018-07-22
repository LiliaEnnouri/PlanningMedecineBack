<?php

use Illuminate\Database\Seeder;

class SeanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Seance')->insert([
            'seance_id'=>1,
            'semaine'=>1,
            'partie_theme_id'=>1
        ]);

        DB::table('Seance')->insert([
            'seance_id'=>2,
            'semaine'=>1,
            'partie_theme_id'=>2
        ]);

        DB::table('Seance')->insert([
            'seance_id'=>3,
            'semaine'=>2,
            'partie_theme_id'=>3
        ]);
    }
}
