<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Type')->insert([
            'type_id' => 1,
            'libelle' => 'Cours magistral'
        ]);

        DB::table('Type')->insert([
            'type_id' => 2,
            'libelle' => 'TP/TD'
        ]);

        DB::table('Type')->insert([
            'type_id' => 3,
            'libelle' => 'Sémiologie'
        ]);

        DB::table('Type')->insert([
            'type_id' => 4,
            'libelle' => 'Intégration'
        ]);
    }
}
