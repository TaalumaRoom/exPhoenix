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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('NomUser')->unique();
            $table->string('Email')->unique();
            $table->string('Telephone')->unique();
            $table->string('RoleUser');
            $table->string('Statut');
            $table->string('Token');
            $table->timestamp('Token_Expire');
            $table->string('Photo');
            $table->string('Password');
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
        Schema::dropIfExists('users');
    }
};
