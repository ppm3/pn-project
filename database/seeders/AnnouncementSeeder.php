<?php

namespace Database\Seeders;

use App\Models\Announcement as ModelsAnnouncement;
use App\Models\House;
use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsAnnouncement::factory()->count(45)->create();
    }
}
