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
        Schema::create('livraison_boutiques', function (Blueprint $table) {
            $table->id();
            $table->foreignId('livraison_id')->constrained('livraisons','id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('boutique_id')->constrained('boutiques','id')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livraison_boutiques');
    }
};
