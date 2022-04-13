<?php

namespace Tepuilabs\SimpleCrm\Models\Enums;

use Spatie\Enum\Laravel\Enum;


/**
 * @method static self LOW_PRIORITY()
 * @method static self MEDIUM_PRIORITY()
 * @method static self HIGH_PRIORITY()
 */
class NoteStatus extends Enum
{

    public function priority(): string
    {
        return match ($this->value) {
            self::LOW_PRIORITY()->value => 'low',
            self::MEDIUM_PRIORITY()->value => 'medium',
            self::HIGH_PRIORITY()->value => 'high',
        };
    }
}
