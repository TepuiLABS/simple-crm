<?php

namespace Tepuilabs\SimpleCrm\Models;

use Illuminate\Database\Eloquent\Model;
use Tepuilabs\SimpleCrm\Models\Enums\LeadStatus;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
     * @return MorphMany
     */
    public function notes(): MorphMany
    {
        return $this->morphMany(\Tepuilabs\SimpleCrm\Models\Note::class, 'commentable');
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
