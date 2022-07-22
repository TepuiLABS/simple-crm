<?php

namespace Tepuilabs\SimpleCrm\Models\Enums\Note;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self LOW_PRIORITY()
 * @method static self MEDIUM_PRIORITY()
 * @method static self HIGH_PRIORITY()
 */
class NotePriority extends Enum
{
    /**
     * @return string
     */
    public function label(): string
    {
        return match ($this->value) {
            self::LOW_PRIORITY()->value => 'low',
            self::MEDIUM_PRIORITY()->value => 'medium',
            self::HIGH_PRIORITY()->value => 'high',
        };
    }
}
