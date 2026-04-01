<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Section::create([
            'name' => 'Call Taking'
        ]);

        Section::create([
            'name' => 'Monitoring'
        ]);
    }
}
