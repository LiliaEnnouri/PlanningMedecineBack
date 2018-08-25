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
            'ordre'=>null,
            'semaine_debut'=>null,
            'semaine_fin'=>null,
            'enseignant_id'=>2,
            'type_id'=>1,
            'unite_id'=>1
        ]);

        DB::table('Theme')->insert([
            'theme_id'=>2,
            'code'=>'C2',
            'contenu'=>"Organisation générale, morphologique et fonctionnelle, de l’appareil d’innervation",
            'nb_heures'=>1,
            'ordre'=>null,
            'semaine_debut'=>null,
            'semaine_fin'=>null,
            'enseignant_id'=>1,
            'type_id'=>2,
            'unite_id'=>1
        ]);

        DB::table('Theme')->insert([
            'theme_id'=>3,
            'code'=>'C3',
            'contenu'=>"Morphogenèse et histogenèse de l’appareil d’innervation",
            'nb_heures'=>2,
            'ordre'=>null,
            'semaine_debut'=>null,
            'semaine_fin'=>null,
            'enseignant_id'=>3,
            'type_id'=>1,
            'unite_id'=>1
        ]);

        DB::table('Theme')->insert([
            'theme_id'=>4,
            'code'=>'C1',
            'contenu'=>"Morphogenèse et histogenèse de l’appareil d’innervation",
            'nb_heures'=>4,
            'ordre'=>null,
            'semaine_debut'=>null,
            'semaine_fin'=>null,
            'enseignant_id'=>3,
            'type_id'=>1,
            'unite_id'=>2
        ]);

        DB::table('Theme')->insert([
            'theme_id'=>5,
            'code'=>'C2',
            'contenu'=>"Morphogenèse et histogenèse de l’appareil d’innervation",
            'nb_heures'=>2,
            'ordre'=>null,
            'semaine_debut'=>null,
            'semaine_fin'=>null,
            'enseignant_id'=>3,
            'type_id'=>1,
            'unite_id'=>2
        ]);

        DB::table('Theme')->insert([
            'theme_id'=>6,
            'code'=>'C3',
            'contenu'=>"Morphogenèse et histogenèse de l’appareil d’innervation",
            'nb_heures'=>3,
            'ordre'=>null,
            'semaine_debut'=>null,
            'semaine_fin'=>null,
            'enseignant_id'=>3,
            'type_id'=>2,
            'unite_id'=>2
        ]);

        DB::table('Theme')->insert([
            'theme_id'=>7,
            'code'=>'C4',
            'contenu'=>"Morphogenèse et histogenèse de l’appareil d’innervation",
            'nb_heures'=>5,
            'ordre'=>null,
            'semaine_debut'=>null,
            'semaine_fin'=>null,
            'enseignant_id'=>3,
            'type_id'=>3,
            'unite_id'=>2
        ]);

        DB::table('Theme')->insert([
            'theme_id'=>8,
            'code'=>'C5',
            'contenu'=>"Morphogenèse et histogenèse de l’appareil d’innervation",
            'nb_heures'=>4,
            'ordre'=>null,
            'semaine_debut'=>null,
            'semaine_fin'=>null,
            'enseignant_id'=>3,
            'type_id'=>2,
            'unite_id'=>2
        ]);

        DB::table('Theme')->insert([
            'theme_id'=>9,
            'code'=>'C6',
            'contenu'=>"Morphogenèse et histogenèse de l’appareil d’innervation",
            'nb_heures'=>2,
            'ordre'=>null,
            'semaine_debut'=>null,
            'semaine_fin'=>null,
            'enseignant_id'=>3,
            'type_id'=>1,
            'unite_id'=>2
        ]);
    }
}
