<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartieThemeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Partie_Theme', function (Blueprint $table) {
            $table->increments('partie_theme_id');
            $table->timestamps();
            $table->softDeletes();

            $table->integer('semaine_debut');
            $table->integer('semaine_fin');


            $table->integer('plage_unite_id')->unsigned();
            $table->foreign('plage_unite_id')
                ->references('plage_unite_id')
                ->on('Plage_Unite')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('theme_id')->unsigned();
            $table->foreign('theme_id')
                ->references('theme_id')
                ->on('Theme')
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
        Schema::dropIfExists('Partie_Theme');
    }
}
