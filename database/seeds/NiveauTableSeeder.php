<?php

use Illuminate\Database\Seeder;

class NiveauTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Niveau')->insert([
            'niveau_id' => 1,
            'nom' => 'PCEM1'
        ]);

        DB::table('Niveau')->insert([
            'niveau_id' => 2,
            'nom' => 'PCEM2'
        ]);

        DB::table('Niveau')->insert([
            'niveau_id' => 3,
            'nom' => 'DCEM1'
        ]);

        DB::table('Niveau')->insert([
            'niveau_id' => 4,
            'nom' => 'DCEM2'
        ]);

        DB::table('Niveau')->insert([
            'niveau_id' => 5,
            'nom' => 'DCEM1'
        ]);
    }
}
