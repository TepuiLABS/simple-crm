<?php

use Tepuilabs\SimpleCrm\Models\Enums\Note\NotePriority;
use Tepuilabs\SimpleCrm\Models\Lead;
use Tepuilabs\SimpleCrm\Models\Note;
use Tepuilabs\SimpleCrm\Tests\Models\User;

beforeEach(function () {
    $this->user = User::factory()->create();
    $this->lead = Lead::factory()
        ->organicType()
        ->leadStatus()->create();

    $this->note = $this->user->notes()->create([
        'priority' => NotePriority::LOW_PRIORITY(),
        'title' => 'Some title',
        'body' => 'Some body',
        'lead_id' => $this->lead->id,
    ]);
});

test('if a user can create a note', function () {
    $this->assertInstanceOf(Note::class, $this->note);
});

test('if note has low priority', function () {
    $this->assertEquals(NotePriority::LOW_PRIORITY(), $this->note->priority);
});
