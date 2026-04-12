<?php

namespace Database\Seeders;

use App\Models\CommandCenterStaff;
use Illuminate\Database\Seeder;

class CommandCenterStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CommandCenterStaff::create([
            'section_id' => 1,
            'name' => 'Martha Stewart',
            'is_active' => true,
        ]);

        CommandCenterStaff::create([
            'section_id' => 1,
            'name' => 'James Mensah',
            'is_active' => true,
        ]);

        CommandCenterStaff::create([
            'section_id' => 1,
            'name' => 'Mercy Tawiah',
            'is_active' => true,
        ]);

        CommandCenterStaff::create([
            'section_id' => 1,
            'name' => 'Joyce Johnson',
            'is_active' => true,
        ]);

        CommandCenterStaff::create([
            'section_id' => 1,
            'name' => 'Richard Tay',
            'is_active' => false,
        ]);

        CommandCenterStaff::create([
            'section_id' => 1,
            'name' => 'Rodney Grey',
            'is_active' => true,
        ]);

        CommandCenterStaff::create([
            'section_id' => 1,
            'name' => 'Ben Addo',
            'is_active' => true,
        ]);

        CommandCenterStaff::create([
            'section_id' => 1,
            'name' => 'Grace Opoku',
            'is_active' => true,
        ]);

        CommandCenterStaff::create([
            'section_id' => 2,
            'name' => 'Daniel Green',
            'is_active' => true,
        ]);

        CommandCenterStaff::create([
            'section_id' => 2,
            'name' => 'Alice Ahinkrah',
            'is_active' => true,
        ]);

        CommandCenterStaff::create([
            'section_id' => 2,
            'name' => 'Reece James',
            'is_active' => true,
        ]);

        CommandCenterStaff::create([
            'section_id' => 2,
            'name' => 'Carl Bagbin',
            'is_active' => true,
        ]);

        CommandCenterStaff::create([
            'section_id' => 2,
            'name' => 'Patience Benson',
            'is_active' => true,
        ]);

        CommandCenterStaff::create([
            'section_id' => 2,
            'name' => 'Kate Henshaw',
            'is_active' => true,
        ]);

        CommandCenterStaff::create([
            'section_id' => 2,
            'name' => 'Mohammed Muniru',
            'is_active' => true,
        ]);

        CommandCenterStaff::create([
            'section_id' => 2,
            'name' => 'Steven Gyamfi',
            'is_active' => true,
        ]);

        CommandCenterStaff::create([
            'section_id' => 2,
            'name' => 'Rejoice Essuman',
            'is_active' => true,
        ]);
    }
}
