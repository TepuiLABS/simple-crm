<?php

use Tepuilabs\SimpleCrm\Models\Lead;

test('it can create lead', function () {

    $lead = Lead::factory()->create();

    $this->assertInstanceOf(Lead::class, $lead);
});

test('it can create a new lead as prospect', function () {

    $lead = Lead::factory()->create(['status' => 'Prospect']);

    $this->assertEquals('Prospect', $lead->status);
});

test('it can create a new lead as organic', function () {

    $lead = Lead::factory()->create(['type' => 'Organic']);

    $this->assertEquals('Organic', $lead->type);
});
