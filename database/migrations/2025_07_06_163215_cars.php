<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained();
            $table->string('model');
            $table->foreignId('body_type_id')->constrained();
            $table->foreignId('engine_type_id')->constrained();
            $table->foreignId('drive_type_id')->constrained();
            $table->integer('year');
            $table->integer('price');
            $table->integer('mileage')->nullable();
            $table->string('color')->nullable();
            $table->string('transmission')->nullable();
            $table->integer('power')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
};