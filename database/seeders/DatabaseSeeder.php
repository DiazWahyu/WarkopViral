<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(100)->create();

        User::create([
            'nama' => 'Mimin 1',
            'username' => 'admin',
            'role' => 'Admin',
            'password' => bcrypt('password')
        ]);

        User::create([
            'nama' => 'Diaz Wahyu',
            'username' => 'Diaz',
            'role' => 'Admin',
            'password' => bcrypt('password')
        ]);

        User::create([
            'nama' => 'Mimin 2',
            'username' => 'manager',
            'role' => 'Manager',
            'password' => bcrypt('password')
        ]);

        User::create([
            'nama' => 'Mimin 3',
            'username' => 'cashier',
            'role' => 'Cashier',
            'password' => bcrypt('password')
        ]);
    }
}
