<?php

use Illuminate\Database\Seeder;

class PlageUniteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Plage_Unite')->insert([
            'plage_unite_id'=>1,
            'jour'=>1,
            'heure_debut'=>'08:00',
            'heure_fin'=>'09:00',
            'unite_id'=>1,
            'type_id'=>1
        ]);

        DB::table('Plage_Unite')->insert([
            'plage_unite_id'=>2,
            'jour'=>2,
            'heure_debut'=>'14:00',
            'heure_fin'=>'16:00',
            'unite_id'=>1,
            'type_id'=>2
        ]);

        DB::table('Plage_Unite')->insert([
            'plage_unite_id'=>3,
            'jour'=>2,
            'heure_debut'=>'10:00',
            'heure_fin'=>'12:00',
            'unite_id'=>1,
            'type_id'=>1
        ]);

    }
}
