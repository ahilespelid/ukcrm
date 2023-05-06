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
        Schema::create('indication_cold_water', function (Blueprint $table) {
            $table->id();
            $table->string('users_id'); //id пользователя
            //$table->foreign('users_id')->references('id')->on('users'); //ссылка на id пользователя
            $table->string('indication'); //показания
            $table->timestamps(); //даты created_at и updated_at
            $table->boolean('active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indication_cold_water');
    }
};
