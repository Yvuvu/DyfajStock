<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('produit_id')->unsigned();
            $table->integer('quantiteEntree');
            $table->date('dateEntree');

            $table->foreign('produit_id')
            ->references('id')
            ->on('produits')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrees');
    }
}
