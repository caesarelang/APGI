<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Admin APGI',
            'email' => 'admin@pengusahagulaindonesia.com',
            'password' => Hash::make('password123'),
            'role' => 'super_admin',
            'is_active' => true,
        ]);

        Admin::create([
            'name' => 'Editor APGI',
            'email' => 'editor@pengusahagulaindonesia.com',
            'password' => Hash::make('editor123'),
            'role' => 'editor',
            'is_active' => true,
        ]);
    }
}
