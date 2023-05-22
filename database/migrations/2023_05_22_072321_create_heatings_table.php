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
        Schema::create('heatings', function (Blueprint $table) {
            $table->id();
            $table->text('gvs_up_coefficient')->nullable(); //ГВС повышающий
            $table->text('heating_consumption')->nullable(); //Отопление расход
            $table->text('heating')->nullable(); //отопление
            $table->text('period')->nullable(); //период - дата
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heatings');
    }
};
