<?php

namespace Tepuilabs\SimpleCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tepuilabs\SimpleCrm\Models\Enums\Note\NotePriority;
use Tepuilabs\SimpleCrm\Models\Lead;
use Tepuilabs\SimpleCrm\Models\Note;
use Tepuilabs\SimpleCrm\Tests\Models\User;

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
        $author = User::factory()->create();
        $lead = Lead::factory()->create();

        return [
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'body' => $this->faker->paragraphs($nb = 3, $asText = false),
            'lead_id' => $lead->id,
            'author_id' => $author->id,
            'author_type' => \Tepuilabs\SimpleCrm\Tests\Models\User::class,
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
