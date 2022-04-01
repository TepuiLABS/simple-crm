<?php

namespace Tepuilabs\SimpleCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = \Tepuilabs\SimpleCrm\Models\Note::class;

    const LOW_PRIORITY = 'Low';
    const MEDIUM_PRIORITY = 'Medium';
    const HIGH_PRIORITY = 'High';


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
            'priority' => $this->faker->randomElement([self::LOW_PRIORITY, self::MEDIUM_PRIORITY, self::HIGH_PRIORITY]),
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'body' => $this->faker->paragraphs($nb = 3, $asText = false),
            'lead_id' => $lead->id,
            'author_id' => $author->id,
            'author_type' => \Tepuilabs\SimpleCrm\Tests\Models\User::class,
        ];
    }
}
