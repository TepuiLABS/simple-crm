<?php

namespace Tepuilabs\SimpleCrm\Enums;

use Datomatic\EnumHelper\EnumHelper;

/**
 * @method static self DRAFT()
 * @method static self PUBLISHED()
 */
enum StatusEnum
{
    use EnumHelper;

    case DRAFT;
    case PUBLISHED;
}
