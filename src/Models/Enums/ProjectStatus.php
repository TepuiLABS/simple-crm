<?php

namespace Tepuilabs\SimpleCrm\Models\Enums;

use Spatie\Enum\Laravel\Enum;


/**
 * @method static self OPEN()
 * @method static self CANCELED()
 * @method static self WIP()
 * @method static self BLOCKED()
 * @method static self COMPLETED()
 */
class ProjectStatus extends Enum
{

    public function status(): string
    {
        return match ($this->value) {
            self::OPEN()->value => 'open',
            self::CANCELED()->value => 'canceled',
            self::WIP()->value => 'work in progress',
            self::BLOCKED()->value => 'blocked',
            self::COMPLETED()->value => 'completed',
        };
    }
}
