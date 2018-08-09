<?php

use Illuminate\Database\Seeder;

class AdministrateurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Administrateur')->insert([
            'administrateur_id' => 1,
            'nom' => 'lilia',
            'email' => 'lilia@gmail.com',
            'qr_code' => 'hahaha',
            'password' => bcrypt('lilia'),
            'passwordDecrypt' => 'lilia',
        ]);


    }
}
