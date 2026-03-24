<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com',
            'password' =>bcrypt('12345678'),
            'contact' => '0244565458',
            'role_id' => 1,
            'department_id' => 1,
        ]);
    }
}
