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
            $table->string('CodeProduit');
            $table->string('NomProduit');
            $table->longText('PrixUnitaire');
            $table->longText('Devise');
            $table->longText('Quantite');
            $table->longText('Etat');
            $table->longText('PhotoUn');
            $table->longText('PhotoDeux');
            $table->longText('PhotoTrois');
            $table->string('PhotoQuatre');
            $table->bigInteger('Categorie_Id')->unsigned();
            $table->timestamps();
            $table->foreign('Categorie_Id')->references('id')->on('categories');
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
