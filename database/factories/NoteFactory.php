<?php

namespace Tepuilabs\SimpleCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Tepuilabs\SimpleCrm\Models\Enums\NoteStatus;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Model>
     */
    protected $model = \Tepuilabs\SimpleCrm\Models\Note::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $author = \Tepuilabs\SimpleCrm\Tests\Models\User::factory()->create();
        $lead = \Tepuilabs\SimpleCrm\Models\Lead::factory()->create();

        return [
            'title' => $this->faker->word,
            'body' => $this->faker->paragraphs(),
            'priority' => $this->faker->randomElement([
                NoteStatus::LOW_PRIORITY(),
                NoteStatus::MEDIUM_PRIORITY(),
                NoteStatus::HIGH_PRIORITY(),
            ]),
            'lead_id' => $lead->id,
            'author_id' => $author->id,
            'author_type' => \Tepuilabs\SimpleCrm\Tests\Models\User::class,
        ];
    }

    public function priorityLow()
    {
        return $this->state([
            'priority' => NoteStatus::LOW_PRIORITY()
        ]);
    }

    public function priorityMedium()
    {
        return $this->state([
            'priority' => NoteStatus::MEDIUM_PRIORITY()
        ]);
    }

    public function priorityHigh()
    {
        return $this->state([
            'priority' => NoteStatus::HIGH_PRIORITY()
        ]);
    }
}
