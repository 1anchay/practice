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
        Schema::create('cars', function (Blueprint $table) {
    $table->id();
    $table->foreignId('brand_id')->constrained();
    $table->foreignId('body_type_id')->constrained();
    $table->foreignId('engine_type_id')->constrained();
    $table->foreignId('drive_type_id')->constrained();
    $table->string('name');
    $table->text('description');
    $table->decimal('price', 12, 2);
    $table->integer('year');
    $table->string('status')->default('in_stock');
    $table->integer('views')->default(0);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
