<?php

use Illuminate\Database\Seeder;

class ThemeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Theme')->insert([
            'theme_id'=>1,
            'code'=>'C1',
            'contenu'=>"Présentation des situations d’intégration",
            'nb_heures'=>2,
            'enseignant_id'=>2,
            'type_id'=>1,
            'unite_id'=>1
        ]);

        DB::table('Theme')->insert([
            'theme_id'=>2,
            'code'=>'C2',
            'contenu'=>"Organisation générale, morphologique et fonctionnelle, de l’appareil d’innervation",
            'nb_heures'=>1,
            'enseignant_id'=>1,
            'type_id'=>1,
            'unite_id'=>1
        ]);

        DB::table('Theme')->insert([
            'theme_id'=>3,
            'code'=>'C3',
            'contenu'=>"Morphogenèse et histogenèse de l’appareil d’innervation",
            'nb_heures'=>2,
            'enseignant_id'=>3,
            'type_id'=>1,
            'unite_id'=>1
        ]);
    }
}
