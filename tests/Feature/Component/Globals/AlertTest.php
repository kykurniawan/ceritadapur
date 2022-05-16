<?php

namespace Tests\Feature\Component\Globals;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AlertTest extends TestCase
{
    public function testAlertComponent()
    {
        $alert = $this->blade('<x-globals.alert>Alert Test</x-globals.alert>');
        $alert->assertSeeText('Alert Test');
    }
}
