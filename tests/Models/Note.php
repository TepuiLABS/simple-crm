<?php
namespace Tepuilabs\SimpleCrm\Tests\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Note extends Model
{
    use HasFactory;

    const LOW_PRIORITY = 'Low';
    const MEDIUM_PRIORITY = 'Medium';
    const HIGH_PRIORITY = 'High';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'priority',
        'title',
        'body',
    ];

    public function author(): MorphTo
    {
        return $this->morphTo();
    }

    public function lead(): BelongsTo
    {
        return $this->belongsTo(\Tepuilabs\SimpleCrm\Models\Lead::class);
    }

    public static function getPriorities(): array
    {
        return [
            self::LOW_PRIORITY => self::LOW_PRIORITY,
            self::MEDIUM_PRIORITY => self::MEDIUM_PRIORITY,
            self::HIGH_PRIORITY => self::HIGH_PRIORITY,
        ];
    }
}
