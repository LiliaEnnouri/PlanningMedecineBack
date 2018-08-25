<?php

use Illuminate\Database\Seeder;

class DeleteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Theme')->delete();
        DB::table('Plage_Unite')->delete();
        DB::table('Unite')->delete();
        DB::table('Appareil')->delete();
        DB::table('Enseignant')->delete();
        DB::table('Privilege')->delete();
        DB::table('Niveau')->delete();
        DB::table('Type_Unite')->delete();
        DB::table('Type')->delete();
        DB::table('Administrateur')->delete();


    }
}
