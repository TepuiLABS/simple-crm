<?php

namespace Tepuilabs\SimpleCrm\Models\Enums\Lead;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self ORGANIC_TYPE()
 * @method static self USER_SUBMITTED_TYPE()
 */
class LeadType extends Enum
{
    /**
     * @return string
     */
    public function label(): string
    {
        return match ($this->value) {
            self::ORGANIC_TYPE()->value => 'organic',
            self::USER_SUBMITTED_TYPE()->value => 'user submitted',
        };
    }
}
