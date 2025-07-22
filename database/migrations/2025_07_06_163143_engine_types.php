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
        Schema::create('engine_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Добавил уникальность
            $table->timestamps();
            $table->softDeletes(); // Добавил мягкое удаление
        });

        // Можно добавить начальные данные
        DB::table('engine_types')->insert([
            ['name' => 'Бензиновый'],
            ['name' => 'Дизельный'],
            ['name' => 'Электрический'],
            ['name' => 'Гибридный'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('engine_types');
    }
};