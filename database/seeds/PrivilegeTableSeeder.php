<?php

use Illuminate\Database\Seeder;

class PrivilegeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Privilege')->insert([
            'privilege_id' => 1,
            'nom' => 'Chef de Section'
        ]);
    }
}
