<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('cars', function (Blueprint $table) {
        // Добавьте недостающие столбцы или измените существующие
        if (!Schema::hasColumn('cars', 'views')) {
            $table->integer('views')->default(0);
        }
        // Другие необходимые изменения
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
