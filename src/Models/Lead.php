<?php

namespace Tepuilabs\SimpleCrm\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Tepuilabs\SimpleCrm\Models\Enums\LeadStatus;

/**
 * @url https://www.hipb2b.com/blog/lead-prospect-whats-difference
 */
class Lead extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'type',
        'status',
    ];

    protected $casts = [
        'status' => LeadStatus::class,
        'type' => LeadStatus::class,
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

    /**
     * Projects relationship
     *
     * @return HasMany
     */
    public function projects(): HasMany
    {
        return $this->hasMany(\Tepuilabs\SimpleCrm\Models\Project::class);
    }
}
