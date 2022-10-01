<?php

namespace Tepuilabs\SimpleCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tepuilabs\SimpleCrm\Enums\Note\NotePriority;
use Tepuilabs\SimpleCrm\Models\Note;

class NoteFactory extends Factory
{
    /**
     * {@inheritdoc}
     */
    protected $model = Note::class;

    /**
     * {@inheritdoc}
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'priority' => $this->faker->randomElement(NotePriority::values()),
        ];
    }

    public function lowPriority(): NoteFactory
    {
        return $this->state([
            'priority' => NotePriority::LOW_PRIORITY(),
        ]);
    }

    public function mediumPriority(): NoteFactory
    {
        return $this->state([
            'priority' => NotePriority::MEDIUM_PRIORITY(),
        ]);
    }

    public function highPriority(): NoteFactory
    {
        return $this->state([
            'priority' => NotePriority::HIGH_PRIORITY(),
        ]);
    }
}
