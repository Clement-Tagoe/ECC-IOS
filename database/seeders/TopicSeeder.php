<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Topic::create(['name' => 'Bad Roads']);
        Topic::create(['name' => 'Galamsey']);
        Topic::create(['name' => 'Sanitation']);
        Topic::create(['name' => 'Prositution']);
        Topic::create(['name' => 'Drug Related Activities']);
        Topic::create(['name' => 'Special Events']);
        Topic::create(['name' => 'Markets']);
        Topic::create(['name' => 'ECC Monitoring']);
        Topic::create(['name' => 'Non-Functioning Traffic Light']);
        Topic::create(['name' => 'Faded Road Sign and Road Marking']);
        Topic::create(['name' => 'Beggars']);
        Topic::create(['name' => 'Street Hawkers']);
        Topic::create(['name' => 'Unusual Behavior']);
        Topic::create(['name' => 'Unlawful Car Parking']);
        Topic::create(['name' => 'Flood']);
        Topic::create(['name' => 'Traffic']);
    }
}
