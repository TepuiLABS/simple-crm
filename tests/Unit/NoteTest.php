<?php

use Tepuilabs\SimpleCrm\Models\Lead;
use Tepuilabs\SimpleCrm\Models\Note;

test('if a user can create a note', function () {
    $user = \Tepuilabs\SimpleCrm\Tests\Models\User::factory()->create();
    $lead = Lead::factory()->create();

    $note = $user->notes()->create([
        'priority' => 'Low',
        'title' => 'Some title',
        'body' => 'Some body',
        'lead_id' => $lead->id,
    ]);

    $this->assertInstanceOf(Note::class, $note);
});
