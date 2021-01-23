<?php

namespace Tepuilabs\SimpleCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class LeadFactory extends Factory
{
    protected $model = \Tepuilabs\SimpleCrm\Models\Lead::class;

    const ORGANIC_TYPE = 'Organic';
    const USER_SUBMITTED_TYPE = 'User Submitted';

    const PROSPECT_STATUS = 'Prospect';
    const LEAD_STATUS = 'Lead';
    const CUSTOMER_STATUS = 'Customer';


    public function definition()
    {
        return [
            'name'      => $this->faker->name,
            'email'     => $this->faker->email,
            'type'      => $this->faker->randomElement([self::ORGANIC_TYPE, self::USER_SUBMITTED_TYPE]),
            'status'    => $this->faker->randomElement([self::PROSPECT_STATUS, self::LEAD_STATUS, self::CUSTOMER_STATUS]),
        ];
    }
}
