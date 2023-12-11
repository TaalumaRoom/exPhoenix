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
            $table->id();
            $table->string('CodeCommande');
            $table->string('PrixTotal');
            $table->longText('Devise');
            $table->longText('QuantiteAchetee');
            $table->longText('LieuLivraison');
            $table->date('DateCommande');
            $table->date('DateLivraison');
            $table->longText('HeureLivraison');
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
        Schema::dropIfExists('commandes');
    }
};
