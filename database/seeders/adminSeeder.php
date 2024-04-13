<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $username = 'Marshanda';
        $password = 'canda2107';

        $hashedPassword = Hash::make($password);

        $admin = [
            'name' => 'Marshanda',
            'password' => $hashedPassword,
        ];

        Admin::insert($admin);
    }
}
