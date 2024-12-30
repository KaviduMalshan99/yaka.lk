<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'super',
            'last_name' => 'admin',
            'url' => 'super-admin',
            'email' => 'admin@gmail.com',
            'roles' => 'admin',
            'password' => Hash::make('12345678'),
        ]);

        Role::create([
            'name' => 'admin',
            'guard_name' => 'web', // Provide a value for guard_name
        ]);

        Role::create([
            'name' => 'user',
            'guard_name' => 'web', // Provide a value for guard_name
        ]);

        // Add more sample data as needed
    }
}
