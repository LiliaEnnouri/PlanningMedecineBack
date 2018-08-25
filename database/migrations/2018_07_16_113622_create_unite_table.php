<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Unite', function (Blueprint $table) {
            $table->increments('unite_id');
            $table->timestamps();
            $table->softDeletes();

            $table->String('code');
            $table->String('intitule');
            $table->integer('nb_credits');
            $table->String('objectif');
            $table->String('prerequis');
            $table->String('description');
            $table->String('ECUE');
            $table->String('modalites_evaluation');
            $table->integer('semaine_debut')->default(null)->nullable();
            $table->integer('semaine_fin')->default(null)->nullable();


            $table->integer('appareil_id')->unsigned();
            $table->foreign('appareil_id')
                ->references('appareil_id')
                ->on('Appareil')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('niveau_id')->unsigned();
            $table->foreign('niveau_id')
                ->references('niveau_id')
                ->on('Niveau')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('enseignant_id')->unsigned();
            $table->foreign('enseignant_id')
                ->references('enseignant_id')
                ->on('Enseignant')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('type_unite_id')->unsigned();
            $table->foreign('type_unite_id')
                ->references('type_unite_id')
                ->on('Type_Unite')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unite');
    }
}
