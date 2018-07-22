<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Etudiant', function (Blueprint $table) {
            $table->increments('etudiant_id');
            $table->String('nom');
            $table->String('prenom');
            $table->String('CIN');
            $table->String('email');
            $table->String('qr_code');
            $table->String('password');
            $table->String('passwordDecrypt');

            $table->integer('niveau_id')->unsigned();
            $table->foreign('niveau_id')
                ->references('niveau_id')
                ->on('Niveau')
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
        Schema::dropIfExists('Etudiant');
    }
}
