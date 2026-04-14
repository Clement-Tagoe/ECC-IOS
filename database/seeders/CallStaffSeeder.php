<?php

namespace Database\Seeders;

use App\Models\CallStaff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CallStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CallStaff::create([
            'name' => 'Martha Stewart',
            'group' => 'Delta',
        ]);

        CallStaff::create([
            'name' => 'James Mensah',
            'group' => 'Bravo',
        ]);

        CallStaff::create([
            'name' => 'Mercy Tawiah',
            'group' => 'Tango',
        ]);

        CallStaff::create([
            'name' => 'Joyce Johnson',
            'group' => 'Bravo',
        ]);

        CallStaff::create([
            'name' => 'Richard Tay',
            'group' => 'Tango',
        ]);

        CallStaff::create([
            'name' => 'Rodney Grey',
            'group' => 'Delta',
        ]);

        CallStaff::create([
            'name' => 'Ben Addo',
            'group' => 'Bravo',
        ]);

        CallStaff::create([
            'name' => 'Grace Opoku',
            'group' => 'Tango',
        ]);

        CallStaff::create([
            'name' => 'Daniel Green',
            'group' => 'Tango',
        ]);

        CallStaff::create([
            'name' => 'Alice Ahinkrah',
            'group' => 'Bravo',
        ]);

        CallStaff::create([
            'name' => 'Reece James',
            'group' => 'Delta',
        ]);

        CallStaff::create([
            'name' => 'Carl Bagbin',
            'group' => 'Bravo'
        ]);

        CallStaff::create([
            'name' => 'Patience Benson',
            'group' => 'Tango',
        ]);

        CallStaff::create([
            'name' => 'Kate Henshaw',
            'group' => 'Tango',
        ]);

        CallStaff::create([
            'name' => 'Mohammed Muniru',
            'group' => 'Bravo',
        ]);

        CallStaff::create([
            'name' => 'Steven Gyamfi',
            'group' => 'Bravo',
        ]);

        CallStaff::create([
            'name' => 'Rejoice Essuman',
            'group' => 'Delta',
        ]);
    }
}
