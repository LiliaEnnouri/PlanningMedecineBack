<?php

use Illuminate\Database\Seeder;

class EnseignantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Enseignant')->insert([
            'enseignant_id' => 1,
            'nom' => 'Hentati',
            'prenom' => 'Nejmeddine',
            'CIN' => '07223344',
            'email' => 'hentati@gmail.com',
            'qr_code' => 'aaaaaaa',
            'password' => 'kzjfbzmifugzpaifaizu',
            'passwordDecrypt' => 'hentati',
            'privilege_id' => 1,
        ]);

        DB::table('Enseignant')->insert([
            'enseignant_id' => 2,
            'nom' => 'Dammak',
            'prenom' => 'Mohamed',
            'CIN' => '07113344',
            'email' => 'dammak@gmail.com',
            'qr_code' => 'bbbbbb',
            'password' => 'kzjfbzmifugzpzrsdcaifaizu',
            'passwordDecrypt' => 'dammak',
            'privilege_id' => 1,
        ]);

        DB::table('Enseignant')->insert([
            'enseignant_id' => 3,
            'nom' => 'Rebai',
            'prenom' => 'Taoufik',
            'CIN' => '07223355',
            'email' => 'rebai@gmail.com',
            'qr_code' => 'ccccccc',
            'password' => 'fuvozcidbhjcnmqovum',
            'passwordDecrypt' => 'rebai',
            'privilege_id' => 1,
        ]);




    }
}
