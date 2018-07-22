<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlageUniteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Plage_Unite', function (Blueprint $table) {
            $table->increments('plage_unite_id');
            $table->timestamps();
            $table->softDeletes();

            $table->String('jour');
            $table->String('heure_debut');
            $table->String('heure_fin');


            $table->integer('unite_id')->unsigned();
            $table->foreign('unite_id')
                ->references('unite_id')
                ->on('Unite')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')
                ->references('type_id')
                ->on('Type')
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
        Schema::dropIfExists('plage_unite');
    }
}
