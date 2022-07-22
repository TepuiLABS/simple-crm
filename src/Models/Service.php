<?php

namespace Tepuilabs\SimpleCrm\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tepuilabs\SimpleCrm\Models\Enums\StatusEnum;

class Service extends Model
{
    use HasFactory;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'name',
        'description',
        'status',
    ];

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'status' => StatusEnum::class,
    ];
}
