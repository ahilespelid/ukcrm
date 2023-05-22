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
        Schema::create('odns', function (Blueprint $table) {
            $table->id();
            $table->text('hvs_odn')->nullable(); //ХВС ОДН
            $table->text('el_day_odn')->nullable(); //Эл.день ОДН 13
            $table->text('el_night_odn')->nullable(); //Эл.ночь ОДН 14
            $table->text('gvs_odn')->nullable(); //ГВС ОДН

            $table->text('comp_gvs_odn')->nullable(); //Комп. на ГВС ОДН
            $table->text('sewage_h_v_odn')->nullable(); //Канал х..в. ОДН
            $table->text('sewage_g_v_odn')->nullable(); //Канал г..в. ОДН

            $table->text('period')->nullable(); //период - дата
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('odns');
    }
};
