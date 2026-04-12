<?php

namespace Database\Seeders;

use App\Models\ShiftReport;
use Illuminate\Database\Seeder;

class ShiftReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ShiftReport::create([
            'user_id' => 2,
            'section_id' => 1,
            'date' => '2026-03-31',
            'shift_type' => 'morning',
            'expected_attendance' => 15,
            'present' => 13,
            'absent' => 2,
            'absent_with_permission' => 1,
            'occupied_consoles' => 13,
            'notes' => 'There are two unoccupied consoles because 1 console is faulty and 1 person is absent'
        ]);

        ShiftReport::create([
            'user_id' => 2,
            'section_id' => 1,
            'date' => '2026-03-31',
            'shift_type' => 'afternoon',
            'expected_attendance' => 14,
            'present' => 13,
            'absent' => 0,
            'absent_with_permission' => 0,
            'occupied_consoles' => 13,
            'notes' => ''
        ]);

        ShiftReport::create([
            'user_id' => 3,
            'section_id' => 1,
            'date' => '2026-03-31',
            'shift_type' => 'night',
            'expected_attendance' => 8,
            'present' => 7,
            'absent' => 1,
            'absent_with_permission' => 1,
            'occupied_consoles' => 8,
            'notes' => ''
        ]);

        ShiftReport::create([
            'user_id' => 4,
            'section_id' => 2,
            'date' => '2026-4-1',
            'shift_type' => 'morning',
            'expected_attendance' => 15,
            'present' => 13,
            'absent' => 2,
            'absent_with_permission' => 2,
            'occupied_consoles' => 13,
            'notes' => ''
        ]);

        ShiftReport::create([
            'user_id' => 3,
            'section_id' => 2,
            'date' => '2026-4-1',
            'shift_type' => 'afternoon',
            'expected_attendance' => 15,
            'present' => 13,
            'absent' => 2,
            'absent_with_permission' => 2,
            'occupied_consoles' => 13,
            'notes' => ''
        ]);
    }
}
