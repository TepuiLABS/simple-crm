<?php

namespace Tepuilabs\SimpleCrm\Models\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self ORGANIC_TYPE()
 * @method static self USER_SUBMITTED_TYPE()
 * @method static self PROSPECT_STATUS()
 * @method static self LEAD_STATUS()
 * @method static self CUSTOMER_STATUS()
 */
class LeadStatus extends Enum
{
    public function types(): string
    {
        return match ($this->value) {
            self::ORGANIC_TYPE()->value => 'organic',
            self::USER_SUBMITTED_TYPE()->value => 'user submitted',
        };
    }

    /**
     *
     */
    public function status(): string
    {
        return match ($this->value) {
            self::PROSPECT_STATUS()->value => 'prospect',
            self::LEAD_STATUS()->value => 'lead',
            self::CUSTOMER_STATUS()->value => 'customer',
        };
    }
}
