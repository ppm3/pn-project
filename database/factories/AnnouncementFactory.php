<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcement>
 */
class AnnouncementFactory extends Factory
{
    private $status = array('active', 'inactive', 'deleted', 'suspended');
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pastDate = now()->subYears(rand(1, 4));
        $pastDate->modify('+' . rand(1, 12) . ' months');

        $startDate = $pastDate->format('Y-m-d');
        $endDate = $pastDate->modify('+4 days')->format('Y-m-d');

        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->sentence(5),
            'start_date' =>  $startDate,
            'end_date' => $endDate,
            'status' => $this->status[array_rand($this->status,1)],
        ];
    }
}
