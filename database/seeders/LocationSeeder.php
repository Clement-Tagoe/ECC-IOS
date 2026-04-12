<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::create([
            'name' => 'Accra',
            'region_id' => 1,
        ]);

        Location::create([
            'name' => 'Kumasi',
            'region_id' => 2,
        ]);

        Location::create([
            'name' => 'Cape Coast',
            'region_id' => 4,
        ]);

        Location::create([
            'name' => 'Obuasi',
            'region_id' => 2,
        ]);

        Location::create([
            'name' => 'Takoradi',
            'region_id' => 3,
        ]);
    }
}
