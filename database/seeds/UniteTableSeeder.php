<?php

use Illuminate\Database\Seeder;

class UniteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Unite')->insert([
            'unite_id' => 1,
            'code'=> '205',
            'intitule'=>"Appareil d’Innervation",
            'nb_credits'=>8,
            'objectif'=>"Apprendre les bases de l'appareil d'innervation",
            'prerequis'=>'Rien en particulier',
            'description'=>'Unité très importante',
            'ECUE'=>'Je ne sais pas',
            'modalites_evaluation'=>'aucune idée',
            'appareil_id'=>2,
            'niveau_id'=>2,
            'enseignant_id'=>1,
            'type_unite_id'=>3
        ]);

        DB::table('Unite')->insert([
            'unite_id' => 2,
            'code'=> '206',
            'intitule'=>"Appareil respiratoire",
            'nb_credits'=>8,
            'objectif'=>"Apprendre les bases de l'appareil respiratoire",
            'prerequis'=>'Rien en particulier',
            'description'=>'Unité très importante',
            'ECUE'=>'Je ne sais pas',
            'modalites_evaluation'=>'aucune idée',
            'appareil_id'=>1,
            'niveau_id'=>2,
            'enseignant_id'=>1,
            'type_unite_id'=>3
        ]);
    }
}
