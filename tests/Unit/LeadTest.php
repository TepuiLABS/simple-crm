<?php

use Tepuilabs\SimpleCrm\Enums\Lead\LeadStatus;
use Tepuilabs\SimpleCrm\Enums\Lead\LeadType;
use Tepuilabs\SimpleCrm\Models\Lead;

beforeEach(function () {
    $this->lead = Lead::factory()
        ->organicType()
        ->leadStatus()
        ->create();
});

test('it can create lead', function () {
    $this->assertInstanceOf(Lead::class, $this->lead);
});

test('it can create a new lead', function () {
    $this->assertEquals(LeadStatus::LEAD_STATUS(), $this->lead->status->value);
});

test('it can create a new lead as organic', function () {
    $this->assertEquals(LeadType::ORGANIC_TYPE(), $this->lead->type->value);
});
