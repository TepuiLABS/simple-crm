<?php

namespace Tepuilabs\SimpleCrm\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Tepuilabs\SimpleCrm\Models\Enums\ProjectStatus;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'deadline',
        'status',
    ];

    protected $casts = [
        'status' => ProjectStatus::class,
    ];

    public function lead(): BelongsTo
    {
        return $this->belongsTo(\Tepuilabs\SimpleCrm\Models\Lead::class);
    }

    public function notes(): MorphMany
    {
        return $this->morphMany(\Tepuilabs\SimpleCrm\Models\Note::class, 'commentable');
    }
}