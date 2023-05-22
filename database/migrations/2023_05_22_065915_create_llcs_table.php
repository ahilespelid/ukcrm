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
        Schema::create('llcs', function (Blueprint $table) {
            $table->id();
            $table->text('hvs_llc')->nullable(); //ХВС коммерция
            $table->text('gvs_llc')->nullable(); //ГВС коммерция
            $table->text('sewerage_hv_llc')->nullable(); //Канал х..в. коммерция
            $table->text('sewerage_gv_llc')->nullable(); //Канал г.в. коммерция
            $table->text('thermal_energy_llc')->nullable(); //Тепл.энергия коммерция
            $table->text('period')->nullable(); //период - дата
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('llcs');
    }
};
