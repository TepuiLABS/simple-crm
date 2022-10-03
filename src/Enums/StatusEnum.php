<?php

namespace Tepuilabs\SimpleCrm\Enums;

use Datomatic\EnumHelper\EnumHelper;

/**
 * @method static self DRAFT()
 * @method static self PUBLISHED()
 */
enum StatusEnum: string
{
    use EnumHelper;

    case DRAFT = 'DRAFT';
    case PUBLISHED = 'PUBLISHED';
}
