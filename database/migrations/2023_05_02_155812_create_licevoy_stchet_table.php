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
        Schema::create('licevoy_stchet', function (Blueprint $table) { //лицевой счет
            $table->id();
            $table->text('email')->nullable(); //email
            $table->text('personal_number_symbol')->nullable(); //символьный номер лицевого счета
            $table->text('personal_number')->nullable(); //номер лицевого счета
            $table->text('apartment')->nullable(); //номер квартиры
            $table->text('total_area')->nullable(); //общая площадь
            $table->text('total_persons')->nullable(); //число проживающих
            $table->text('imprest')->nullable(); //аванс
            $table->text('last_payment')->nullable(); //сумма последнего платежа
            $table->text('date_last_payment')->nullable(); //дата последнего платежа
            $table->text('payer')->nullable(); //плательщик ФИО
            $table->text('ipu_cold_water')->nullable(); //заводской № ИПУ холодной воды
            $table->text('ipu_cold_water_date_off')->nullable(); //ИПУ холодной воды дата вывода
            $table->text('ipu_cold_water_latest_indications_fact')->nullable(); //ИПУ холодной воды последние показания фактические / boolean
            $table->text('ipu_cold_water_latest_indications_date')->nullable(); //ИПУ холодной воды последние показания дата
            $table->text('ipu_cold_water_latest_indications')->nullable(); //ИПУ холодной воды последние показания
            $table->text('ipu_cold_water_this_indications')->nullable(); //ИПУ холодной воды текущие показания
            $table->text('ipu_hot_water')->nullable(); //заводской № ИПУ горячей воды
            $table->text('ipu_hot_water_date_off')->nullable(); //ИПУ горячей воды дата вывода
            $table->text('ipu_hot_water_latest_indications_fact')->nullable();; //ИПУ горячей воды последние показания фактические / boolean
            $table->text('ipu_hot_water_latest_indications_date')->nullable(); //ИПУ горячей воды последние показания дата
            $table->text('ipu_hot_water_latest_indications')->nullable(); //ИПУ горячей воды последние показания
            $table->text('ipu_hot_water_this_indications')->nullable(); //ИПУ горячей воды текущие показания
            $table->text('ipu_electricity_day')->nullable(); //заводской № ИПУ электричества день
            $table->text('ipu_electricity_day_date_off')->nullable(); //ИПУ электричества день дата вывода
            $table->text('ipu_electricity_day_latest_indications_fact')->nullable(); //ИПУ электричества день последние показания фактические / boolean
            $table->text('ipu_electricity_day_latest_indications_date')->nullable(); //ИПУ электричества день последние показания дата
            $table->text('ipu_electricity_day_latest_indications')->nullable(); //ИПУ электричества день последние показания
            $table->text('ipu_electricity_day_this_indications')->nullable(); //ИПУ электричества день текущие показания
            $table->text('ipu_electricity_night')->nullable(); //заводской № ИПУ электричества ночь
            $table->text('ipu_electricity_night_date_off')->nullable(); //ИПУ электричества ночь дата вывода
            $table->text('ipu_electricity_night_latest_indications_fact')->nullable(); //ИПУ электричества ночь последние показания фактические / boolean
            $table->text('ipu_electricity_night_latest_indications_date')->nullable(); //ИПУ электричества ночь последние показания дата
            $table->text('ipu_electricity_night_latest_indications')->nullable(); //ИПУ электричества ночь последние показания
            $table->text('ipu_electricity_night_this_indications')->nullable(); //ИПУ электричества ночь текущие показания
            $table->text('active')->nullable();
            
            $table->timestamps(); //created_at и updated_at
            $table->timestamp('deleted_at')->nullable(); //deleted_at
            //+

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licevoy_stchet');
    }
};
