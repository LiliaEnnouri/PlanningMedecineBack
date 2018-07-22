<?php

use Illuminate\Database\Seeder;

class AppareilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Appareil')->insert([
            'appareil_id' => 1,
            'nom' => 'Général'
        ]);

        DB::table('Appareil')->insert([
            'appareil_id' => 2,
            'nom' => 'Circulatoire'
        ]);

        DB::table('Appareil')->insert([
            'appareil_id' => 3,
            'nom' => 'Respiratoire'
        ]);

        DB::table('Appareil')->insert([
            'appareil_id' => 4,
            'nom' => 'Digestif'
        ]);

        DB::table('Appareil')->insert([
            'appareil_id' => 5,
            'nom' => 'Endocrine'
        ]);

        DB::table('Appareil')->insert([
            'appareil_id' => 6,
            'nom' => 'Neuropsychologique'
        ]);


    }
}
