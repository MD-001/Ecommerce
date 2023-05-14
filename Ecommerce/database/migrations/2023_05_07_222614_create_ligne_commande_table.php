<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligne_commande', function (Blueprint $table) {

            $table->string("Qte-cmd");
            $table->string("sous-totale");
            $table->unsignedBigInteger('commande_id'); 
            $table->unsignedBigInteger('produit_id'); 
            $table->foreign('commande_id')->references('id')->on('commande');
            $table->foreign('produit_id')->references('id')->on('produits');
            $table->primary(["commande_id","produit_id"]);
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
        Schema::dropIfExists('ligne_commande');
    }
};
