<?php

namespace Tepuilabs\SimpleCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Tepuilabs\SimpleCrm\Models\Enums\ProjectStatus;
use Tepuilabs\SimpleCrm\Models\Project;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Model>
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraphs(),
            'deadline' => $this->faker->date(),
            'status' => $this->faker->randomElement([
                ProjectStatus::OPEN(),
                ProjectStatus::CANCELED(),
                ProjectStatus::WIP(),
                ProjectStatus::BLOCKED(),
                ProjectStatus::COMPLETED(),
            ])
        ];
    }

    public function statusOpen()
    {
        return $this->state([
            'status' => ProjectStatus::OPEN()
        ]);
    }

    public function statusCanceled()
    {
        return $this->state([
            'status' => ProjectStatus::CANCELED()
        ]);
    }

    public function statusWip()
    {
        return $this->state([
            'status' => ProjectStatus::WIP()
        ]);
    }

    public function statusBlocked()
    {
        return $this->state([
            'status' => ProjectStatus::BLOCKED()
        ]);
    }

    public function statusCompleted()
    {
        return $this->state([
            'status' => ProjectStatus::COMPLETED()
        ]);
    }
}
