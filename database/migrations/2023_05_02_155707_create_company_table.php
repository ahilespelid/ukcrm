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
        Schema::create('company', function (Blueprint $table) { //данные управляющей компании
            $table->id();
            $table->string('name');
            $table->string('number_rog'); //номер организации
            $table->string('email')->unique();
            $table->string('phone'); //основной номер телефона организации
            $table->string('phone_city'); //городской номер телефона организации
            $table->string('inn'); //инн организации
            $table->string('kpp'); //кпп организации
            $table->string('ogrn'); //огрн организации
            $table->string('rs'); //расчетный счет организации
            $table->string('ks'); //курс/счет организации
            $table->string('bank'); //наименование банка организации
            $table->string('bik'); //бик банка организации
            $table->string('address'); //фактический адрес организации
            $table->string('law_address'); //юридический адрес организации
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
