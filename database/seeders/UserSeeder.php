<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'Name' => 'Admin User',
                'Email' => 'admin@example.com',
                'Password' => Hash::make('password'), // pastikan password terenkripsi
                'Role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Name' => 'Regular User',
                'Email' => 'user@example.com',
                'Password' => Hash::make('password'), // pastikan password terenkripsi
                'Role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
