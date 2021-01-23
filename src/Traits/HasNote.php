<?php
namespace Tepuilabs\SimpleCrm\Traits;

trait HasNote
{
    public function notes()
    {
        return $this->morphMany(\Tepuilabs\SimpleCrm\Models\Note::class, 'author');
    }
}
