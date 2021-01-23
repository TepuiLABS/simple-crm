<?php

namespace Tepuilabs\SimpleCrm\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @url https://www.hipb2b.com/blog/lead-prospect-whats-difference
 */
class Lead extends Model
{

    use HasFactory;

    const ORGANIC_TYPE = 'Organic';
    const USER_SUBMITTED_TYPE = 'User Submitted';

    const PROSPECT_STATUS = 'Prospect';
    const LEAD_STATUS = 'Lead';
    const CUSTOMER_STATUS = 'Customer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'type',
        'status',
    ];

    /**
     * Notes relationship
     *
     * @return HasMany
     */
    public function notes(): HasMany
    {
        return $this->hasMany(\Tepuilabs\SimpleCrm\Models\Note::class);
    }

    public static function getTypes(): array
    {
        return [
            self::ORGANIC_TYPE => self::ORGANIC_TYPE,
            self::USER_SUBMITTED_TYPE => self::USER_SUBMITTED_TYPE,
        ];
    }

    public static function getStatuses(): array
    {
        return [
            self::PROSPECT_STATUS => self::PROSPECT_STATUS,
            self::LEAD_STATUS => self::LEAD_STATUS,
            self::CUSTOMER_STATUS => self::CUSTOMER_STATUS,
        ];
    }
}
