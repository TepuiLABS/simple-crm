<?php

namespace Tepuilabs\SimpleCrm\Models\Enums\Lead;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self PROSPECT_STATUS()
 * @method static self LEAD_STATUS()
 * @method static self CUSTOMER_STATUS()
 */
class LeadStatus extends Enum
{
    /**
     * @return string
     */
    public function label(): string
    {
        return match ($this->value) {
            self::PROSPECT_STATUS()->value => 'prospect',
            self::LEAD_STATUS()->value => 'lead',
            self::CUSTOMER_STATUS()->value => 'customer',
        };
    }
}
