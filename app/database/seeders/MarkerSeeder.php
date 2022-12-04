<?php

namespace Database\Seeders;

use App\Models\Marker;
use Illuminate\Database\Seeder;

class MarkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Make 10 random records for marker
        for ($i = 0; $i < 10; $i++) {
            Marker::factory()->create();
        }
    }
}
