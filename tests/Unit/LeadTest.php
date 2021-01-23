<?php
namespace Tepuilabs\SimpleCrm\Tests\Unit;

use Tepuilabs\SimpleCrm\Models\Lead;
use Tepuilabs\SimpleCrm\Tests\TestCase;

class LeadTest extends TestCase
{
    /** @test */
    public function test_it_can_create_lead()
    {
        $lead = Lead::factory()->create();

        $this->assertInstanceOf(Lead::class, $lead);
    }

    /** @test */
    public function test_it_lead_status_is_prospect()
    {
        $lead = Lead::factory()->create(['status' => 'Prospect']);

        $this->assertEquals('Prospect', $lead->status);
    }

    /** @test */
    public function test_it_lead_type_is_organic()
    {
        $lead = Lead::factory()->create(['type' => 'Organic']);

        $this->assertEquals('Organic', $lead->type);
    }
}
