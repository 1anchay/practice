<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BodyType;
use App\Models\Brand;
use App\Models\EngineType;
use App\Models\DriveType;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Типы кузова
        $bodyTypes = ['Седан', 'Кроссовер', 'Внедорожник', 'Хэтчбек'];
        foreach ($bodyTypes as $type) {
            BodyType::create(['name' => $type]);
        }
        
        // Бренды
        $brands = ['Chery', 'Geely', 'BYD', 'Haval', 'Zeekr', 'Exeed'];
        foreach ($brands as $brand) {
            Brand::create(['name' => $brand]);
        }
        
        // Типы двигателя
        $engineTypes = ['Бензин', 'Гибрид', 'Электромобиль'];
        foreach ($engineTypes as $type) {
            EngineType::create(['name' => $type]);
        }
        
        // Типы привода
        $driveTypes = ['Передний', 'Полный', 'Задний'];
        foreach ($driveTypes as $type) {
            DriveType::create(['name' => $type]);
        }
    }
}