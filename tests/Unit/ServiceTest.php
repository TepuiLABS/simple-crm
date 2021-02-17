<?php

namespace Tepuilabs\SimpleCrm\Tests\Unit;

use Tepuilabs\SimpleCrm\Tests\TestCase;

class ServiceTest extends TestCase
{
    /** @test */
    public function test_it_can_create_services()
    {
        $service = \Tepuilabs\SimpleCrm\Tests\Models\Service::factory()->create();

        $this->assertInstanceOf(\Tepuilabs\SimpleCrm\Tests\Models\Service::class, $service);
    }
}
