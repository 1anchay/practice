<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Добавляем недостающие колонки если их нет
        Schema::table('body_types', function (Blueprint $table) {
            if (!Schema::hasColumn('body_types', 'slug')) {
                $table->string('slug')->nullable()->after('name');
            }
        });

        Schema::table('brands', function (Blueprint $table) {
            if (!Schema::hasColumn('brands', 'slug')) {
                $table->string('slug')->nullable()->after('name');
            }
        });

        Schema::table('engine_types', function (Blueprint $table) {
            if (!Schema::hasColumn('engine_types', 'slug')) {
                $table->string('slug')->nullable()->after('name');
            }
        });

        Schema::table('drive_types', function (Blueprint $table) {
            if (!Schema::hasColumn('drive_types', 'slug')) {
                $table->string('slug')->nullable()->after('name');
            }
        });
    }

    public function down()
    {
        // Откат изменений (опционально)
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