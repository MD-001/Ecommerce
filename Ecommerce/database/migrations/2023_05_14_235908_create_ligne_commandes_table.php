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
        Schema::create('ligne_commandes', function (Blueprint $table) {
            $table->id();
            $table->decimal('sous-total',8,2);
            $table->integer('qte-produit');
            $table->foreignId('commande_id')->constrained('commandes','id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('produit_id')->constrained('produits','id')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ligne_commandes');
    }
};
