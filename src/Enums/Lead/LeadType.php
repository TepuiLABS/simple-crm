<?php

namespace Tepuilabs\SimpleCrm\Enums\Lead;

use Datomatic\EnumHelper\EnumHelper;

/**
 * @method static self ORGANIC_TYPE()
 * @method static self USER_SUBMITTED_TYPE()
 */
enum LeadType: string
{
    use EnumHelper;

    case ORGANIC_TYPE = 'organic';
    case USER_SUBMITTED_TYPE = 'user submitted';
}
