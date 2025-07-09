<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Проверяем, не существует ли уже администратор
        if (!User::where('email', 'admin@example.com')->exists()) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('SecurePassword123!'), // Более сложный пароль
                'is_admin' => true,
                'email_verified_at' => now() // Автоматически подтверждаем email
            ]);
            
            $this->command->info('Администратор успешно создан!');
            $this->command->warn('Логин: admin@example.com');
            $this->command->warn('Пароль: SecurePassword123!');
        } else {
            $this->command->info('Администратор уже существует в базе данных.');
        }
    }
}