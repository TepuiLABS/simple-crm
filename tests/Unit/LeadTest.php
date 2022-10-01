<?php

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertInstanceOf;
use Tepuilabs\SimpleCrm\Enums\Lead\LeadStatus;
use Tepuilabs\SimpleCrm\Enums\Lead\LeadType;
use Tepuilabs\SimpleCrm\Models\Lead;
use Tepuilabs\SimpleCrm\Models\Note;

beforeEach(function () {
    $this->lead = Lead::factory()
        ->organicType()
        ->leadStatus()
        ->hasNotes(3)
        ->create();
});

it('can create lead', function () {
    assertInstanceOf(Lead::class, $this->lead);
});

it('can create a new lead', function () {
    assertEquals(LeadStatus::LEAD_STATUS(), $this->lead->status->value);
});

it('can create a new lead as organic', function () {
    assertEquals(LeadType::ORGANIC_TYPE(), $this->lead->type->value);
});

it('lead notes can be obtained', function () {
    expect($this->lead->notes->count())
        ->toBe(3)
        ->and($this->lead->notes->first())
        ->toBeInstanceOf(Note::class);
});
