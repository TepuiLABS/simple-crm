<?php

namespace Tepuilabs\SimpleCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tepuilabs\SimpleCrm\Enums\StatusEnum;
use Tepuilabs\SimpleCrm\Models\Service;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(6, true),
            'description' => $this->faker->sentence(6, true),
            'status' => $this->faker->randomElement(StatusEnum::values()),
        ];
    }
}
