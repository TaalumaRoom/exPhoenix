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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('CodeFacture');
            $table->string('PrixTotal');
            $table->longText('Devise');
            $table->longText('QuantiteAchetee');
            $table->date('DateFacture');
            $table->date('Etat');
            $table->longText('Fichier');
            $table->bigInteger('Users_Id')->unsigned();
            $table->bigInteger('Produits_Id')->unsigned();
            $table->timestamps();
            $table->foreign('Users_Id')->references('id')->on('users');
            $table->foreign('Produits_Id')->references('id')->on('produits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factures');
    }
};
