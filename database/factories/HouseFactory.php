<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HouseFactory extends Factory
{
    private $houseSector = array('A','B','C','D','E','F');
    private $habitantStatus = array('active', 'inactive', 'suspended');
    private $habitantType = array('active', 'inactive', 'suspended');
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sector' => $this->houseSector[array_rand($this->houseSector,1)],
            'number' => rand(1, 100),
            'status' => 'active',
            'habitant' => [
                'first_name' => fake()->name(),
                'last_name' => fake()->name(),
                'phone' => fake()->phoneNumber(),
                'status' => $this->habitantStatus[array_rand($this->habitantStatus,1)],
                'type' => $this->habitantType[array_rand($this->habitantType,1)],
            ],
        ];
    }
}
