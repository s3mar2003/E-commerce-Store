<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('12345678'),
            'is_admin' => true,
        ]);

        // إنشاء مستخدم عادي
        User::create([
            'name' => 'Normal User',
            'email' => 'user@example.com',
            'password' => bcrypt('12345678'),
            'is_admin' => false,
        ]);
    }
    }

