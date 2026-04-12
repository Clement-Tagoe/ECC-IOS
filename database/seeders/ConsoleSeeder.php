<?php

namespace Database\Seeders;

use App\Models\Console;
use Illuminate\Database\Seeder;

class ConsoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Console::create([
            'section_id' => 1,
            'identifier' => 'CT001',
            'status' => 'operational',
        ]);

        Console::create([
            'section_id' => 1,
            'identifier' => 'CT002',
            'status' => 'operational',
        ]);

        Console::create([
            'section_id' => 1,
            'identifier' => 'CT003',
            'status' => 'operational',
        ]);

        Console::create([
            'section_id' => 1,
            'identifier' => 'CT004',
            'status' => 'operational',
        ]);

        Console::create([
            'section_id' => 1,
            'identifier' => 'CT005',
            'status' => 'operational',
        ]);

        Console::create([
            'section_id' => 1,
            'identifier' => 'CT006',
            'status' => 'operational',
        ]);

        Console::create([
            'section_id' => 1,
            'identifier' => 'CT007',
            'status' => 'operational',
        ]);

        Console::create([
            'section_id' => 1,
            'identifier' => 'CT008',
            'status' => 'faulty',
        ]);

        Console::create([
            'section_id' => 1,
            'identifier' => 'CT009',
            'status' => 'operational',
        ]);

        Console::create([
            'section_id' => 1,
            'identifier' => 'CT010',
            'status' => 'maintenance',
        ]);

        Console::create([
            'section_id' => 2,
            'identifier' => 'MT001',
            'status' => 'operational',
        ]);

        Console::create([
            'section_id' => 2,
            'identifier' => 'MT002',
            'status' => 'operational',
        ]);

        Console::create([
            'section_id' => 2,
            'identifier' => 'MT003',
            'status' => 'faulty',
        ]);

        Console::create([
            'section_id' => 2,
            'identifier' => 'MT004',
            'status' => 'operational',
        ]);

        Console::create([
            'section_id' => 2,
            'identifier' => 'MT005',
            'status' => 'operational',
        ]);

        Console::create([
            'section_id' => 2,
            'identifier' => 'MT006',
            'status' => 'operational',
        ]);

        Console::create([
            'section_id' => 2,
            'identifier' => 'MT007',
            'status' => 'operational',
        ]);

        Console::create([
            'section_id' => 2,
            'identifier' => 'MT008',
            'status' => 'operational',
        ]);

        Console::create([
            'section_id' => 2,
            'identifier' => 'MT009',
            'status' => 'maintenance',
        ]);

        Console::create([
            'section_id' => 2,
            'identifier' => 'MT010',
            'status' => 'operational',
        ]);
    }
}
