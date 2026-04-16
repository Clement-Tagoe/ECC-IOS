<?php

namespace Database\Seeders;

use App\Models\MonitoringStaff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonitoringStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MonitoringStaff::create([
            'name' => 'Catherine Mensah',
            'group' => 'Delta',
        ]);

        MonitoringStaff::create([
            'name' => 'Fiifi Adoboli',
            'group' => 'Bravo',
        ]);

        MonitoringStaff::create([
            'name' => 'Theo Mendes',
            'group' => 'Tango',
        ]);

        MonitoringStaff::create([
            'name' => 'Jennifer Lomotey',
            'group' => 'Bravo',
        ]);

        MonitoringStaff::create([
            'name' => 'Ricky Kabutey',
            'group' => 'Tango',
        ]);

        MonitoringStaff::create([
            'name' => 'Eva Loco',
            'group' => 'Delta',
        ]);

        MonitoringStaff::create([
            'name' => 'Michael Johnson',
            'group' => 'Bravo',
        ]);

        MonitoringStaff::create([
            'name' => 'Anita Twum',
            'group' => 'Tango',
        ]);

        MonitoringStaff::create([
            'name' => 'Ricardo Tayson',
            'group' => 'Tango',
        ]);

        MonitoringStaff::create([
            'name' => 'Lydia Hennessey',
            'group' => 'Bravo',
        ]);

        MonitoringStaff::create([
            'name' => 'Roy Chambers',
            'group' => 'Delta',
        ]);

        MonitoringStaff::create([
            'name' => 'Lisa Koranteng',
            'group' => 'Bravo'
        ]);

        MonitoringStaff::create([
            'name' => 'John Adjei',
            'group' => 'Tango',
        ]);

        MonitoringStaff::create([
            'name' => 'Monica Tetteh',
            'group' => 'Tango',
        ]);

        MonitoringStaff::create([
            'name' => 'Hisham Olando',
            'group' => 'Bravo',
        ]);

        MonitoringStaff::create([
            'name' => 'Rudolf Benson',
            'group' => 'Bravo',
        ]);

        MonitoringStaff::create([
            'name' => 'Rose Grey',
            'group' => 'Delta',
        ]);
    }
}
