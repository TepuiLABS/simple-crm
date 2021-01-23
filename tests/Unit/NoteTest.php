<?php
namespace Tepuilabs\SimpleCrm\Tests\Unit;

use Tepuilabs\SimpleCrm\Models\Note;
use Tepuilabs\SimpleCrm\Tests\TestCase;

class NoteTest extends TestCase
{
    /** @test */
    public function test_it_has_an_author_type()
    {
        $article = Note::factory()->create(['author_type' => 'Fake\User']);

        $this->assertEquals('Fake\User', $article->author_type);
    }
}
