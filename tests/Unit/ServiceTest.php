<?php

use Tepuilabs\SimpleCrm\Models\Service;

test('it can create services', function () {

    $service = Service::factory()->create();

    $this->assertInstanceOf(Service::class, $service);
});
