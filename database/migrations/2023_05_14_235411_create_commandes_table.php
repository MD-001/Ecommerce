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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id('ref');
            $table->date("date");
            $table->string("desciption");
            $table->integer("total");
            $table->integer("quantite_produit");
            $table->foreignId('livraison_id')->constrained('livraisons','id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('produit_id')->constrained('produits','id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('client_id')->constrained('users','id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('etat_commande_id')->constrained('etat_commande_id','id')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('commandes');
    }
};
