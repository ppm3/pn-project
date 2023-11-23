<?php

namespace Database\Seeders;

use App\Models\House as ModelsHouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsHouse::factory()->count(100)->create();
    }
}
