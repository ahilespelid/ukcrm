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
        Schema::create('sewages', function (Blueprint $table) {
            $table->id();
            $table->text('sewage_h_v')->nullable(); //Канал х..в.
            $table->text('sewage_g_v')->nullable(); //Канал г.в.

            $table->text('period')->nullable(); //период - дата
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewages');
    }
};
