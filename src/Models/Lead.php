<?php

namespace Tepuilabs\SimpleCrm\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @url https://www.hipb2b.com/blog/lead-prospect-whats-difference
 */
class Lead extends Model
{
    use HasFactory;

    public const ORGANIC_TYPE = 'Organic';
    public const USER_SUBMITTED_TYPE = 'User Submitted';

    public const PROSPECT_STATUS = 'Prospect';
    public const LEAD_STATUS = 'Lead';
    public const CUSTOMER_STATUS = 'Customer';

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
        return $this->hasMany(\App\Models\Tepuilabs\SimpleCrm\Note::class);
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public static function getTypes(): array
    {
        return [
            self::ORGANIC_TYPE => self::ORGANIC_TYPE,
            self::USER_SUBMITTED_TYPE => self::USER_SUBMITTED_TYPE,
        ];
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public static function getStatuses(): array
    {
        return [
            self::PROSPECT_STATUS => self::PROSPECT_STATUS,
            self::LEAD_STATUS => self::LEAD_STATUS,
            self::CUSTOMER_STATUS => self::CUSTOMER_STATUS,
        ];
    }
}
