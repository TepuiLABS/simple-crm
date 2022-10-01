<?php

use Illuminate\Database\Eloquent\Collection;
use Tepuilabs\SimpleCrm\Models\Lead;
use Tepuilabs\SimpleCrm\Models\Note;
use Tepuilabs\SimpleCrm\Models\Project;

beforeEach(function () {
    $this->project = Project::factory()
        ->for($this->lead = Lead::factory()->create())
        ->has(Note::factory()->count(3))
        ->create();
});

it('project lead can be obtained', function () {
    expect($this->project->lead)
        ->toBeInstanceOf(Lead::class)
        ->and($this->project->lead->id)
        ->toBe($this->lead->id);
});

it('project notes can be obtained')
    ->expect(fn () => $this->project->notes)
    ->toBeInstanceOf(Collection::class)
    ->and(fn () => $this->project->notes->count())
    ->toBe(3);
