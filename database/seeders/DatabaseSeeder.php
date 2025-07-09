<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{
    BodyType,
    Brand,
    EngineType,
    DriveType,
    User
};

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Создаем администратора
        $this->createAdminUser();

        // Заполняем справочники
        $this->seedBodyTypes();
        $this->seedBrands();
        $this->seedEngineTypes();
        $this->seedDriveTypes();
    }

    protected function createAdminUser()
    {
        if (!User::where('email', 'admin@example.com')->exists()) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('SecurePassword123!'),
                'is_admin' => true,
                'email_verified_at' => now()
            ]);
            $this->command->info('Администратор создан: admin@example.com / SecurePassword123!');
        }
    }

    protected function seedBodyTypes()
    {
        $types = ['Седан', 'Кроссовер', 'Внедорожник', 'Хэтчбек'];
        foreach ($types as $type) {
            BodyType::firstOrCreate(['name' => $type]);
        }
    }

    protected function seedBrands()
    {
        $brands = ['Chery', 'Geely', 'BYD', 'Haval', 'Zeekr', 'Exeed'];
        foreach ($brands as $brand) {
            Brand::firstOrCreate(['name' => $brand]);
        }
    }

    protected function seedEngineTypes()
    {
        $types = ['Бензин', 'Гибрид', 'Электромобиль'];
        foreach ($types as $type) {
            EngineType::firstOrCreate(['name' => $type]);
        }
    }

    protected function seedDriveTypes()
    {
        $types = ['Передний', 'Полный', 'Задний'];
        foreach ($types as $type) {
            DriveType::firstOrCreate(['name' => $type]);
        }
    }
}