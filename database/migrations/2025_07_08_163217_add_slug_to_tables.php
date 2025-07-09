<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Добавляем slug для body_types
        Schema::table('body_types', function (Blueprint $table) {
            $table->string('slug')->unique()->after('name');
        });

        // Добавляем slug для brands
        Schema::table('brands', function (Blueprint $table) {
            $table->string('slug')->unique()->after('name');
        });

        // Добавляем slug для engine_types
        Schema::table('engine_types', function (Blueprint $table) {
            $table->string('slug')->unique()->after('name');
        });

        // Добавляем slug для drive_types
        Schema::table('drive_types', function (Blueprint $table) {
            $table->string('slug')->unique()->after('name');
        });
    }

    public function down()
    {
        Schema::table('body_types', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('brands', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('engine_types', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('drive_types', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};