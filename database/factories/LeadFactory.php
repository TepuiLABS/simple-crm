<?php

namespace Tepuilabs\SimpleCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tepuilabs\SimpleCrm\Models\Enums\Lead\LeadStatus;
use Tepuilabs\SimpleCrm\Models\Enums\Lead\LeadType;
use Tepuilabs\SimpleCrm\Models\Lead;

class LeadFactory extends Factory
{
    /**
     * {@inheritdoc}
     */
    protected $model = Lead::class;

    /**
     * {@inheritdoc}
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
        ];
    }

    public function organicType(): LeadFactory
    {
        return $this->state([
            'type' => LeadType::ORGANIC_TYPE(),
        ]);
    }

    public function userSubmittedType(): LeadFactory
    {
        return $this->state([
            'type' => LeadType::USER_SUBMITTED_TYPE(),
        ]);
    }

    public function leadStatus(): LeadFactory
    {
        return $this->state([
            'status' => LeadStatus::LEAD_STATUS()
        ]);
    }

    public function prospectStatus(): LeadFactory
    {
        return $this->state([
            'status' => LeadStatus::PROSPECT_STATUS()
        ]);
    }

    public function customerStatus(): LeadFactory
    {
        return $this->state([
            'status' => LeadStatus::CUSTOMER_STATUS()
        ]);
    }
}
