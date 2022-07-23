<?php

namespace Tepuilabs\SimpleCrm\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Tepuilabs\SimpleCrm\Models\Enums\Lead\LeadStatus;
use Tepuilabs\SimpleCrm\Models\Enums\Lead\LeadType;


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
     * @return MorphMany
     */
    public function notes(): MorphMany
    {
        return $this->morphMany(Note::class, 'commentable');
    }
}
