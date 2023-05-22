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
            $table->string('name')->nullable();
            $table->string('number_rog')->nullable(); //номер организации
            $table->string('email')->nullable();
            $table->string('phone')->nullable(); //основной номер телефона организации
            $table->string('phone_city')->nullable(); //городской номер телефона организации
            $table->string('inn')->nullable(); //инн организации
            $table->string('kpp')->nullable(); //кпп организации
            $table->string('ogrn')->nullable(); //огрн организации
            $table->string('rs')->nullable(); //расчетный счет организации
            $table->string('ks')->nullable(); //курс/счет организации
            $table->string('bank')->nullable(); //наименование банка организации
            $table->string('bik')->nullable(); //бик банка организации
            $table->string('address')->nullable(); //фактический адрес организации
            $table->string('law_address')->nullable(); //юридический адрес организации
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
