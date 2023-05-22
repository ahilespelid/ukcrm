<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('id_group_houses'); //id группы домов
            //$table->foreign('id_group_houses')->references('id')->on('group_houses'); //ссылка на id группы домов
            $table->string('region')->nullable(); //регион
            $table->string('city')->nullable(); //город/поселок
            $table->string('street')->nullable(); //улица
            $table->string('house')->nullable();  //номер дома
            $table->boolean('active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
