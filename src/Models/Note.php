<?php

namespace Tepuilabs\SimpleCrm\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Tepuilabs\SimpleCrm\Models\Enums\Note\NotePriority;

class Note extends Model
{
    use HasFactory;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'title',
        'body',
        'priority',
    ];

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'priority' => NotePriority::class,
    ];

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
}
