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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->text('santekh_work')->nullable(); //Сантех. работы
            $table->text('electrotech_work')->nullable(); //Электротех. работы
            $table->text('roofing')->nullable(); //Кровельные работы
            $table->text('sanitary_service')->nullable(); //Санитар.обслуживание
            $table->text('sightseeing')->nullable(); //Осмотры
            $table->text('lifts')->nullable(); //Лифты
            $table->text('aur_rkc_ps')->nullable(); //АУР,РКЦ,Пасп.стол
            $table->text('special_work')->nullable(); //Особ. и спец. работы
            $table->text('additional_work')->nullable(); //Доп. работы
            $table->text('сivil_works')->nullable(); //Общестроит. работы

            $table->text('component_gvs')->nullable(); //Компонент  на ГВС

            $table->text('television')->nullable(); //Телетрансляция
            $table->text('blagoustroystvo')->nullable(); //Благоустройство

            $table->text('cleaning_stairwells')->nullable(); //Уборка лестн. клеток
            $table->text('maintenance_territory')->nullable(); //Содерж. придом. территории
            $table->text('management_services')->nullable(); //Услуги по управл.
            $table->text('lifts_maintenance')->nullable(); //Тех. обсл. лифтов
            $table->text('maintenance_appz')->nullable(); //Обсл. сист. АППЗ
            $table->text('maintenance_aitp')->nullable(); //Обсл. АИТП

            $table->text('maintenance_communications')->nullable(); //Сод.и тех. обсл. коммуникаций
            $table->text('maintenance_skud')->nullable(); //Обсл. СКУД
            $table->text('emergency_dispatch_services')->nullable(); //Авар.-дисп. обсл
            $table->text('current_common_property')->nullable(); //Тек.рем.общ.имущ.
            $table->text('passport_registration_service')->nullable(); //Пасп-регистр.обсл

            $table->text('period')->nullable(); //период - дата
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
