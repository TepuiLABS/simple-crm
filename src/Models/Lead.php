<?php

namespace Tepuilabs\SimpleCrm\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Tepuilabs\SimpleCrm\Models\Enums\Lead\LeadStatus;
use Tepuilabs\SimpleCrm\Models\Enums\Lead\LeadType;

/**
 * @url https://www.hipb2b.com/blog/lead-prospect-whats-difference
 */
class Lead extends Model
{
    use HasFactory;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'name',
        'email',
        'type',
        'status',
    ];

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'status' => LeadStatus::class,
        'type' => LeadType::class,
    ];

    /**
     * Notes relationship
     *
     * @return HasMany
     */
    public function notes(): HasMany
    {
        return $this->hasMany(Note::class);
    }
}
