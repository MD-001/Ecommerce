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
            $table->string("description");
            $table->decimal('prix', 8, 2);
            $table->string("image");
            $table->integer("qte_stock");
            $table->decimal("tva",4,2);
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
