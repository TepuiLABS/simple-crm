<?php

use Tepuilabs\SimpleCrm\Models\Enums\NoteStatus;
use Tepuilabs\SimpleCrm\Models\Lead;
use Tepuilabs\SimpleCrm\Models\Note;
use Tepuilabs\SimpleCrm\Tests\Models\User;

test('if a user can create a note', function () {
    $user = User::factory()->create();
    $lead = Lead::factory()->create();

    $note = $user->notes()->create([
        'title' => 'Some title',
        'body' => 'Some body',
        'lead_id' => $lead->id,
        'priority' => NoteStatus::LOW_PRIORITY(),
    ]);

    $this->assertInstanceOf(Note::class, $note);
});
