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
        Schema::create('commande', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->string("desciption");
            $table->string("totale");
            $table->unsignedBigInteger('client_id'); 
            $table->foreign('client_id')->references('id')->on('users');
            $table->unsignedBigInteger('etat_commande_id');
            $table->foreign('etat_commande_id')->references('id')->on('etat_commande');
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
        Schema::dropIfExists('commande');
    }
};
