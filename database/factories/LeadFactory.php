<?php

namespace Tepuilabs\SimpleCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tepuilabs\SimpleCrm\Enums\Lead\LeadStatus;
use Tepuilabs\SimpleCrm\Enums\Lead\LeadType;
use Tepuilabs\SimpleCrm\Models\Lead;

class LeadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Lead::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'type' => $this->faker->randomElement(LeadType::values()),
            'status' => $this->faker->randomElement(LeadStatus::values()),
        ];
    }

    /**
     * Indicate that the lead type is organic .
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function organicType(): Factory
    {
        return $this->state([
            'type' => LeadType::ORGANIC_TYPE(),
        ]);
    }

    /**
     * Indicate that the lead type is submitted .
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function userSubmittedType(): Factory
    {
        return $this->state([
            'type' => LeadType::USER_SUBMITTED_TYPE(),
        ]);
    }

    /**
     * Indicate that the lead status is lead.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function leadStatus(): Factory
    {
        return $this->state([
            'status' => LeadStatus::LEAD_STATUS(),
        ]);
    }

    /**
     * Indicate that the lead status is prospect.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function prospectStatus(): Factory
    {
        return $this->state([
            'status' => LeadStatus::PROSPECT_STATUS(),
        ]);
    }

    /**
     * Indicate that the lead status is customer.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function customerStatus(): Factory
    {
        return $this->state([
            'status' => LeadStatus::CUSTOMER_STATUS(),
        ]);
    }
}
