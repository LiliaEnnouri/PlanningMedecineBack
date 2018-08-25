<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Seance', function (Blueprint $table) {
            $table->increments('seance_id');
            $table->integer('semaine');

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
        Schema::dropIfExists('Seance');
    }
}
