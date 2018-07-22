<?php

use Illuminate\Database\Seeder;

class PartieThemeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Partie_Theme')->insert([
            'partie_theme_id' => 1,
            'semaine_debut'=>1,
            'semaine_fin'=>1,
            'theme_id'=>1,
            'plage_unite_id'=>1
        ]);

        DB::table('Partie_Theme')->insert([
            'partie_theme_id' => 2,
            'semaine_debut'=>1,
            'semaine_fin'=>1,
            'theme_id'=>2,
            'plage_unite_id'=>3
        ]);

        DB::table('Partie_Theme')->insert([
            'partie_theme_id' => 3,
            'semaine_debut'=>2,
            'semaine_fin'=>2,
            'theme_id'=>3,
            'plage_unite_id'=>1
        ]);
    }
}
