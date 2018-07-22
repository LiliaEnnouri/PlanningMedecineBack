<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Administrateur', function (Blueprint $table) {
            $table->increments('administrateur_id');
            $table->String('nom');
            $table->String('email');
            $table->String('qr_code');
            $table->String('password');
            $table->String('passwordDecrypt');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Administrateur');
    }
}
