<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Theme', function (Blueprint $table) {
            $table->increments('theme_id');
            $table->timestamps();
            $table->softDeletes();

            $table->String('code');
            $table->String('contenu');
            $table->integer('nb_heures');
            $table->integer('ordre');


            $table->integer('enseignant_id')->unsigned();
            $table->foreign('enseignant_id')
                ->references('enseignant_id')
                ->on('Enseignant')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')
                ->references('type_id')
                ->on('Type')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('unite_id')->unsigned();
            $table->foreign('unite_id')
                ->references('unite_id')
                ->on('Unite')
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
        Schema::dropIfExists('theme');
    }
}
