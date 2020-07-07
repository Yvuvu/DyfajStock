<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produit_id')->unsigned(); 
            $table->integer('quantiteVente');
            $table->date('dateVente');
            $table->integer('montantAchat');
            $table->integer('montantRecu');           
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
        Schema::dropIfExists('ventes');
    }
}
