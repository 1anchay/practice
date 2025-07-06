<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdmin extends Command
{
    protected $signature = 'admin:create 
        {email : Admin email}
        {password : Admin password}
        {--name=Admin : Admin name}
        {--force : Overwrite existing user}';

    protected $description = 'Create a new admin user';

    public function handle()
    {
        $email = $this->argument('email');
        $password = $this->argument('password');
        $name = $this->option('name');

        if (User::where('email', $email)->exists() && !$this->option('force')) {
            $this->error("User with email {$email} already exists. Use --force to overwrite.");
            return;
        }

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => Hash::make($password),
                'is_admin' => true
            ]
        );

        $this->info("Admin user {$email} created successfully!");
    }
}