<?php

namespace Tepuilabs\SimpleCrm\Enums\Note;

use Datomatic\EnumHelper\EnumHelper;

/**
 * @method static self LOW_PRIORITY()
 * @method static self MEDIUM_PRIORITY()
 * @method static self HIGH_PRIORITY()
 */
enum NotePriority: string
{
    use EnumHelper;

    case LOW_PRIORITY = 'low';
    case MEDIUM_PRIORITY = 'medium';
    case HIGH_PRIORITY = 'high';
}
