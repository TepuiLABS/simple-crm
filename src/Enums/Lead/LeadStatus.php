<?php

namespace Tepuilabs\SimpleCrm\Enums\Lead;

use Datomatic\EnumHelper\EnumHelper;

/**
 * @method static self PROSPECT_STATUS()
 * @method static self LEAD_STATUS()
 * @method static self CUSTOMER_STATUS()
 */
enum LeadStatus: string
{
    use EnumHelper;

    case PROSPECT_STATUS = 'prospect';
    case LEAD_STATUS = 'lead';
    case CUSTOMER_STATUS = 'customer';
}
