<?php

namespace Tepuilabs\SimpleCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tepuilabs\SimpleCrm\Enums\Note\NotePriority;
use Tepuilabs\SimpleCrm\Models\Note;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'priority' => $this->faker->randomElement(NotePriority::values()),
        ];
    }

    /**
     * Indicate that the note priority is low.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function lowPriority(): Factory
    {
        return $this->state([
            'priority' => NotePriority::LOW_PRIORITY(),
        ]);
    }

    /**
     * Indicate that the note priority is medium.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function mediumPriority(): Factory
    {
        return $this->state([
            'priority' => NotePriority::MEDIUM_PRIORITY(),
        ]);
    }

    /**
     * Indicate that the note priority is high.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function highPriority(): Factory
    {
        return $this->state([
            'priority' => NotePriority::HIGH_PRIORITY(),
        ]);
    }
}
