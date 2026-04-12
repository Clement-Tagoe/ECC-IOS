<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'System-Admin']);
        Role::create(['name' => 'Supervisor(Call-Taking)']);
        Role::create(['name' => 'Supervisor(Monitoring']);
        Role::create(['name' => 'Unit-Head(Call-Taking)']);
        Role::create(['name' => 'Unit-Head(Monitoring)']);
        Role::create(['name' => 'Director']);
        Role::create(['name' => 'General-User']);
    }
}
