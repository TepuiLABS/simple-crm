<?php

namespace Tepuilabs\SimpleCrm\Database\Factories;

use Illuminate\Database\Eloquent\Model;
use Tepuilabs\SimpleCrm\Models\Enums\LeadStatus;
use Illuminate\Database\Eloquent\Factories\Factory;
use Tepuilabs\SimpleCrm\Models\Lead;

class LeadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Model>
     */
    protected $model = Lead::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'type' => $this->faker->randomElement([
                LeadStatus::ORGANIC_TYPE(),
                LeadStatus::USER_SUBMITTED_TYPE(),
            ]),
            'status' => $this->faker->randomElement([
                LeadStatus::PROSPECT_STATUS(),
                LeadStatus::LEAD_STATUS(),
                LeadStatus::CUSTOMER_STATUS(),
            ]),
        ];
    }

    public function typeOrganic()
    {
        return $this->state([
            'type' => LeadStatus::ORGANIC_TYPE()
        ]);
    }

    public function typeUserSubmitted()
    {
        return $this->state([
            'type' => LeadStatus::USER_SUBMITTED_TYPE()
        ]);
    }

    public function statusProspect()
    {
        return $this->state([
            'status' => LeadStatus::PROSPECT_STATUS()
        ]);
    }

    public function statusLead()
    {
        return $this->state([
            'status' => LeadStatus::LEAD_STATUS()
        ]);
    }

    public function statusCustomer()
    {
        return $this->state([
            'status' => LeadStatus::CUSTOMER_STATUS()
        ]);
    }
}
