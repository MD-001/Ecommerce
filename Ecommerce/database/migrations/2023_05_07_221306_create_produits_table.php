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
            $table->id();
            $table->string("desciption");
            $table->decimal('prix', 10, 2);
            // $table->string("image");
            // $table->string('RoleID', 10)->default('c');
            // $table->foreign('RoleID')->references('id')->on('roles'); 
            // $table->integer('neighborhood_id')->length(11);
            // $table->foreign('neighborhood_id')->references('id')->on('sa_neighborhoods');
            $table->unsignedBigInteger('propiete_id'); 
            $table->foreign('propiete_id')->references('id')->on('propriete');
            $table->unsignedBigInteger('marque_id'); 
            $table->foreign('marque_id')->references('id')->on('marque');
            $table->unsignedBigInteger('fourniseur_id'); 
            $table->foreign('fourniseur_id')->references('id')->on('fourniseurs');
            $table->unsignedBigInteger('categorie_id'); 
            $table->foreign('categorie_id')->references('id')->on('categorie');
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
