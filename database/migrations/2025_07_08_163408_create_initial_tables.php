<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Таблица типов кузова
        Schema::create('body_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable(); // Делаем slug необязательным
            $table->timestamps();
        });

        // Таблица брендов
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->timestamps();
        });

        // Таблица типов двигателя
        Schema::create('engine_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->timestamps();
        });

        // Таблица типов привода
        Schema::create('drive_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('drive_types');
        Schema::dropIfExists('engine_types');
        Schema::dropIfExists('brands');
        Schema::dropIfExists('body_types');
    }
};