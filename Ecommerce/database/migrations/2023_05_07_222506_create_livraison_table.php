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
        Schema::create('livraison', function (Blueprint $table) {
            $table->id();
            $table->date("date-livraison");
            $table->unsignedBigInteger('commande_id'); 
            $table->foreign('commande_id')->references('id')->on('commande');
            $table->unsignedBigInteger('mode_livraison_id');
            $table->foreign('mode_livraison_id')->references('id')->on('mode_livraison');
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
        Schema::dropIfExists('livraison');
    }
};
