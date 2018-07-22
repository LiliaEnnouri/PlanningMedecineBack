<?php

use Illuminate\Database\Seeder;

class TypeUniteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Type_Unite')->insert([
            'type_unite_id' => 1,
            'nom' => 'UEF'
        ]);

        DB::table('Type_Unite')->insert([
            'type_unite_id' => 2,
            'nom' => 'UEO'
        ]);

        DB::table('Type_Unite')->insert([
            'type_unite_id' => 3,
            'nom' => 'UET'
        ]);
    }
}
