<?php

use Tepuilabs\SimpleCrm\Models\Lead;

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
});
