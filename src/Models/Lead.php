<?php

namespace Tepuilabs\SimpleCrm\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Tepuilabs\SimpleCrm\Enums\Lead\LeadStatus;
use Tepuilabs\SimpleCrm\Enums\Lead\LeadType;

class Lead extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'email',
        'type',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => LeadStatus::class,
        'type' => LeadType::class,
    ];

    /**
     * Get all of the lead's notes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function notes(): MorphMany
    {
        return $this->morphMany(Note::class, 'commentable');
    }
}
