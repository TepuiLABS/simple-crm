<?php

namespace Tepuilabs\SimpleCrm\Models\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self DRAFT()
 * @method static self PUBLISHED()
 */
class StatusEnum extends Enum
{
    /**
     * @return string
     */
    public function label(): string
    {
        return match ($this->value) {
            self::DRAFT()->value => 'DRAFT',
            self::PUBLISHED()->value => 'PUBLISHED',
        };
    }
}
