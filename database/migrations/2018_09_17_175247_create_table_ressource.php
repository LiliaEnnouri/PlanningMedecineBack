<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRessource extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ressource', function (Blueprint $table) {
            $table->increments('ressource_id');
            $table->string('libelle');
            $table->string('path');

            $table->integer('theme_id')->unsigned();
            $table->foreign('theme_id')
                ->references('theme_id')
                ->on('Theme')
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
        //
    }
}
