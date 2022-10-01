<?php

namespace Tepuilabs\SimpleCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tepuilabs\SimpleCrm\Enums\Project\ProjectStatus;
use Tepuilabs\SimpleCrm\Models\Project;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
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
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'deadline' => $this->faker->date(),
            'status' => $this->faker->randomElement(ProjectStatus::values()),
        ];
    }

    /**
     * Indicate that the project status is open.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function statusOpen(): Factory
    {
        return $this->state([
            'status' => ProjectStatus::OPEN(),
        ]);
    }

    /**
     * Indicate that the project status is canceled.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function statusCanceled(): Factory
    {
        return $this->state([
            'status' => ProjectStatus::CANCELED(),
        ]);
    }

    /**
     * Indicate that the project status is work in progress.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function statusWip(): Factory
    {
        return $this->state([
            'status' => ProjectStatus::WIP(),
        ]);
    }

    /**
     * Indicate that the project status is blocked.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function statusBlocked(): Factory
    {
        return $this->state([
            'status' => ProjectStatus::BLOCKED(),
        ]);
    }

    /**
     * Indicate that the project status is completed.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function statusCompleted(): Factory
    {
        return $this->state([
            'status' => ProjectStatus::COMPLETED(),
        ]);
    }
}
