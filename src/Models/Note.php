<?php

namespace Tepuilabs\SimpleCrm\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Tepuilabs\SimpleCrm\Models\Enums\Note\NotePriority;

class Note extends Model
{
    use HasFactory;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'priority',
        'title',
        'body',
    ];

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'priority' => NotePriority::class,
    ];

    public function author(): MorphTo
    {
        return $this->morphTo();
    }

    public function lead(): BelongsTo
    {
        return $this->belongsTo(Lead::class);
    }
}
