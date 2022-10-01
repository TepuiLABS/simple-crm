<?php

namespace Tepuilabs\SimpleCrm\Enums;

use Datomatic\EnumHelper\EnumHelper;

/**
 * @method static self OPEN()
 * @method static self CANCELED()
 * @method static self WIP()
 * @method static self BLOCKED()
 * @method static self COMPLETED()
 */
enum ProjectStatus: string
{
    use EnumHelper;

    case OPEN = 'open';
    case CANCELED = 'canceled';
    case WIP = 'work in progress';
    case BLOCKED = 'blocked';
    case COMPLETED = 'completed';
}
