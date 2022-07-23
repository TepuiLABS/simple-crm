<?php

use Tepuilabs\SimpleCrm\Models\Enums\Lead\LeadStatus;
use Tepuilabs\SimpleCrm\Models\Enums\Lead\LeadType;
use Tepuilabs\SimpleCrm\Models\Lead;

<<<<<<< HEAD
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
    $this->assertEquals(LeadStatus::LEAD_STATUS(), $this->lead->status);
});

test('it can create a new lead as organic', function () {
    $this->assertEquals(LeadType::ORGANIC_TYPE(), $this->lead->type);
=======
test('it can create lead', function () {
    $lead = Lead::factory()->create();

    $this->assertInstanceOf(Lead::class, $lead);
});

test('it can create a new lead as statusProspect typeOrganic', function () {
    $lead = Lead::factory()->statusProspect()->typeOrganic()->create();

    expect($lead->type->types())->toBe('organic');
    expect($lead->status->status())->toBe('prospect');
});

test('it can create a new lead as typeUserSubmitted statusLead', function () {
    $lead = Lead::factory()->typeUserSubmitted()->statusLead()->create();

    expect($lead->type->types())->toBe('user submitted');
    expect($lead->status->status())->toBe('lead');
>>>>>>> master
});
