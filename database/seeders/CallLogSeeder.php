<?php

namespace Database\Seeders;

use App\Models\CallLog;
use Illuminate\Database\Seeder;

class CallLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CallLog::create([
            'incoming_calls' => 35000,
            'total_calls_received' => 26000,
            'valid_calls' => 500,
            'prank_calls' => 28000,
            'unanswered_calls' => 3000,
            'HOD' => 'Pending Review',
            'shift' => 'Day',
            'start_time' => '07:00:00',
            'end_time' => '19:00:00',
            'created_by' => 'John Doe',
            'date' => '2026-03-20'
        ]);

        CallLog::create([
            'incoming_calls' => 42000,
            'total_calls_received' => 31500,
            'valid_calls' => 820,
            'prank_calls' => 29800,
            'unanswered_calls' => 4200,
            'HOD' => 'Pending Review',
            'shift' => 'Day',
            'start_time' => '07:00:00',
            'end_time' => '19:00:00',
            'created_by' => 'Sarah Mitchell',
            'date' => '2026-03-21'
        ]);

        CallLog::create([
            'incoming_calls' => 38000,
            'total_calls_received' => 27400,
            'valid_calls' => 450,
            'prank_calls' => 25500,
            'unanswered_calls' => 4600,
            'HOD' => 'Reviewed',
            'shift' => 'Night',
            'start_time' => '19:00:00',
            'end_time' => '07:00:00',
            'created_by' => 'Michael Reyes',
            'date' => '2026-03-21'
        ]);

        CallLog::create([
            'incoming_calls' => 29500,
            'total_calls_received' => 21800,
            'valid_calls' => 620,
            'prank_calls' => 19800,
            'unanswered_calls' => 1700,
            'HOD' => 'Pending Review',
            'shift' => 'Day',
            'start_time' => '07:00:00',
            'end_time' => '19:00:00',
            'created_by' => 'Emma Patel',
            'date' => '2026-03-22'
        ]);

        CallLog::create([
            'incoming_calls' => 48500,
            'total_calls_received' => 36200,
            'valid_calls' => 980,
            'prank_calls' => 33500,
            'unanswered_calls' => 6800,
            'HOD' => 'Reviewed',
            'shift' => 'Night',
            'start_time' => '19:00:00',
            'end_time' => '07:00:00',
            'created_by' => 'David Chen',
            'date' => '2026-03-22'
        ]);

        CallLog::create([
            'incoming_calls' => 31000,
            'total_calls_received' => 23500,
            'valid_calls' => 410,
            'prank_calls' => 22000,
            'unanswered_calls' => 2500,
            'HOD' => 'Pending Review',
            'shift' => 'Day',
            'start_time' => '07:00:00',
            'end_time' => '19:00:00',
            'created_by' => 'Lisa Thompson',
            'date' => '2026-03-23'
        ]);

        CallLog::create([
            'incoming_calls' => 44500,
            'total_calls_received' => 32800,
            'valid_calls' => 750,
            'prank_calls' => 30500,
            'unanswered_calls' => 5150,
            'HOD' => 'Reviewed',
            'shift' => 'Night',
            'start_time' => '19:00:00',
            'end_time' => '07:00:00',
            'created_by' => 'James Carter',
            'date' => '2026-03-23'
        ]);

        CallLog::create([
            'incoming_calls' => 36500,
            'total_calls_received' => 27100,
            'valid_calls' => 590,
            'prank_calls' => 24800,
            'unanswered_calls' => 3600,
            'HOD' => 'Pending Review',
            'shift' => 'Day',
            'start_time' => '07:00:00',
            'end_time' => '19:00:00',
            'created_by' => 'Rachel Kim',
            'date' => '2026-03-24'
        ]);

        CallLog::create([
            'incoming_calls' => 52000,
            'total_calls_received' => 39500,
            'valid_calls' => 1100,
            'prank_calls' => 36800,
            'unanswered_calls' => 7500,
            'HOD' => 'Reviewed',
            'shift' => 'Night',
            'start_time' => '19:00:00',
            'end_time' => '07:00:00',
            'created_by' => 'Ahmed Hassan',
            'date' => '2026-03-24'
        ]);

        CallLog::create([
            'incoming_calls' => 33200,
            'total_calls_received' => 24600,
            'valid_calls' => 680,
            'prank_calls' => 22800,
            'unanswered_calls' => 2800,
            'HOD' => 'Pending Review',
            'shift' => 'Day',
            'start_time' => '07:00:00',
            'end_time' => '19:00:00',
            'created_by' => 'Sophia Nguyen',
            'date' => '2026-03-25'
        ]);

        CallLog::create([
            'incoming_calls' => 40800,
            'total_calls_received' => 30200,
            'valid_calls' => 870,
            'prank_calls' => 27800,
            'unanswered_calls' => 5400,
            'HOD' => 'Reviewed',
            'shift' => 'Night',
            'start_time' => '19:00:00',
            'end_time' => '07:00:00',
            'created_by' => 'Robert Evans',
            'date' => '2026-03-25'
        ]);
    }
}
