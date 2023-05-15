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
        Schema::create('produits', function (Blueprint $table) {
            $table->id('ref');
            $table->string("designation");
            $table->string("desciption");
            $table->decimal('prix', 8, 2);
            $table->string("image");
            $table->string("qte_stock");
            $table->string("tva");
            // $table->string('RoleID', 10)->default('c');
            // $table->foreign('RoleID')->references('id')->on('roles'); 
            // $table->integer('neighborhood_id')->length(11);
            // $table->foreign('neighborhood_id')->references('id')->on('sa_neighborhoods');
            $table->foreignId('propiete_id')->constrained('proprietes','id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('marque_id')->constrained('marques','id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('fournisseur_id')->constrained('fournisseurs','id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('categorie_id')->constrained('categories','id')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('produits');
    }
};
