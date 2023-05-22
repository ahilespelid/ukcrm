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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('users_id')->nullable(); //id пользователя
            //$table->foreign('users_id')->references('id')->on('users'); //ссылка на id пользователя
            $table->string('sum')->nullable(); //сумма
            $table->timestamps(); //даты created_at и updated_at
            $table->boolean('active')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
