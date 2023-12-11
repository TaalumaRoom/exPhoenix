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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->string('CodeProduit');
            $table->string('PrixUnitaire');
            $table->string('Devise');
            $table->string('Quantite');
            $table->string('PrixAncien');
            $table->date('DelaiOffre');
            $table->longText('PhotoUn');
            $table->longText('PhotoDeux');
            $table->longText('PhotoTrois');
            $table->string('PhotoQuatre');
            $table->timestamps();
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
        Schema::dropIfExists('offres');
    }
};
