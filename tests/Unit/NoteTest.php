<?php
namespace Tepuilabs\SimpleCrm\Tests\Unit;

use Tepuilabs\SimpleCrm\Models\Note;
use Tepuilabs\SimpleCrm\Tests\TestCase;

class NoteTest extends TestCase
{
    /** @test */
    public function test_it_user_can_create_a_note()
    {
        $user = \Tepuilabs\SimpleCrm\Tests\Models\User::factory()->create();
        $lead = \Tepuilabs\SimpleCrm\Models\Lead::factory()->create();

        $note = $user->notes()->create([
            'priority' => 'Low',
            'title' => 'Some title',
            'body' => 'Some body',
            'lead_id' => $lead->id,
        ]);

        $this->assertInstanceOf(Note::class, $note);
    }
}
