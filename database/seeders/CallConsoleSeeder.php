<?php

namespace Database\Seeders;

use App\Models\CallConsole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CallConsoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CallConsole::create([
            'console_name' => 'CT001',
            'status' => 'operational',
        ]);

        CallConsole::create([
            'console_name' => 'CT002',
            'status' => 'operational',
        ]);

        CallConsole::create([
            'console_name' => 'CT003',
            'status' => 'operational',
        ]);

        CallConsole::create([
            'console_name' => 'CT004',
            'status' => 'operational',
        ]);

        CallConsole::create([
            'console_name' => 'CT005',
            'status' => 'operational',
        ]);

        CallConsole::create([
            'console_name' => 'CT006',
            'status' => 'operational',
        ]);

        CallConsole::create([
            'console_name' => 'CT007',
            'status' => 'operational',
        ]);

        CallConsole::create([
            'console_name' => 'CT008',
            'status' => 'faulty',
        ]);

        CallConsole::create([
            'console_name' => 'CT009',
            'status' => 'operational',
        ]);

        CallConsole::create([
            'console_name' => 'CT010',
            'status' => 'maintenance',
        ]);

        CallConsole::create([
            'console_name' => 'CT011',
            'status' => 'operational',
        ]);

        CallConsole::create([
            'console_name' => 'CT012',
            'status' => 'operational',
        ]);

        CallConsole::create([
            'console_name' => 'CT013',
            'status' => 'faulty',
        ]);

        CallConsole::create([
            'console_name' => 'CT014',
            'status' => 'operational',
        ]);

        CallConsole::create([
            'console_name' => 'CT015',
            'status' => 'operational',
        ]);

        CallConsole::create([
            'console_name' => 'CT016',
            'status' => 'operational',
        ]);

        CallConsole::create([
            'console_name' => 'CT017',
            'status' => 'operational',
        ]);

        CallConsole::create([
            'console_name' => 'CT018',
            'status' => 'operational',
        ]);

        CallConsole::create([
            'console_name' => 'CT019',
            'status' => 'maintenance',
        ]);

        CallConsole::create([
            'console_name' => 'CT020',
            'status' => 'operational',
        ]);
    }
}
