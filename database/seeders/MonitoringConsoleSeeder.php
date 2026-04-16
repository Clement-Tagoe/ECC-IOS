<?php

namespace Database\Seeders;

use App\Models\MonitoringConsole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonitoringConsoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MonitoringConsole::create([
            'console_name' => 'MT001',
            'status' => 'operational',
        ]);

        MonitoringConsole::create([
            'console_name' => 'MT002',
            'status' => 'operational',
        ]);

        MonitoringConsole::create([
            'console_name' => 'MT003',
            'status' => 'operational',
        ]);

        MonitoringConsole::create([
            'console_name' => 'MT004',
            'status' => 'operational',
        ]);

        MonitoringConsole::create([
            'console_name' => 'MT005',
            'status' => 'operational',
        ]);

        MonitoringConsole::create([
            'console_name' => 'MT006',
            'status' => 'operational',
        ]);

        MonitoringConsole::create([
            'console_name' => 'MT007',
            'status' => 'operational',
        ]);

        MonitoringConsole::create([
            'console_name' => 'MT008',
            'status' => 'faulty',
        ]);

        MonitoringConsole::create([
            'console_name' => 'MT009',
            'status' => 'operational',
        ]);

        MonitoringConsole::create([
            'console_name' => 'MT010',
            'status' => 'maintenance',
        ]);

        MonitoringConsole::create([
            'console_name' => 'MT011',
            'status' => 'operational',
        ]);

        MonitoringConsole::create([
            'console_name' => 'MT012',
            'status' => 'operational',
        ]);

        MonitoringConsole::create([
            'console_name' => 'MT013',
            'status' => 'faulty',
        ]);

        MonitoringConsole::create([
            'console_name' => 'MT014',
            'status' => 'operational',
        ]);

        MonitoringConsole::create([
            'console_name' => 'MT015',
            'status' => 'operational',
        ]);

        MonitoringConsole::create([
            'console_name' => 'MT016',
            'status' => 'operational',
        ]);

        MonitoringConsole::create([
            'console_name' => 'MT017',
            'status' => 'operational',
        ]);

        MonitoringConsole::create([
            'console_name' => 'MT018',
            'status' => 'operational',
        ]);

        MonitoringConsole::create([
            'console_name' => 'MT019',
            'status' => 'maintenance',
        ]);

        MonitoringConsole::create([
            'console_name' => 'MT020',
            'status' => 'operational',
        ]);
    }
}
