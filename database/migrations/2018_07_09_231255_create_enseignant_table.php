<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnseignantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Enseignant', function (Blueprint $table) {
            $table->increments('enseignant_id');
            $table->String('nom');
            $table->String('prenom');
            $table->String('CIN');
            $table->String('email');
            $table->String('qr_code');
            $table->String('password');
            $table->String('passwordDecrypt');

            $table->integer('privilege_id')->unsigned();
            $table->foreign('privilege_id')
                ->references('privilege_id')
                ->on('Privilege')
                ->onDelete('restrict')
                ->onUpdate('restrict');

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
        Schema::dropIfExists('Enseignant');
    }
}
