<?php

use Tepuilabs\SimpleCrm\Enums\Note\NotePriority;
use Tepuilabs\SimpleCrm\Models\Lead;
use Tepuilabs\SimpleCrm\Models\Note;
use Tepuilabs\SimpleCrm\Tests\Models\User;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertInstanceOf;

beforeEach(function () {
    $this->user = User::factory()->create();
    $this->lead = Lead::factory()
        ->organicType()
        ->leadStatus()
        ->create();

    $this->note = Note::factory()
        ->lowPriority()
        ->for($this->user, 'author')
        ->for($this->lead, 'commentable')
        ->create();
});

it('a user can create a note', function () {
    assertInstanceOf(Note::class, $this->note);
});

it('a note has low priority', function () {
    assertEquals(NotePriority::LOW_PRIORITY(), $this->note->priority->value);
});

it('can get the commentable of a note', function () {
    expect($this->note->commentable)
        ->toBeInstanceOf(Lead::class)
        ->and($this->note->commentable)
        ->id->toEqual($this->lead->id)
        ->name->toEqual($this->lead->name);
});

