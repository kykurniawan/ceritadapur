<?php

namespace Tests\Feature\Component\Globals;

use App\View\Components\Globals\Footer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FooterTest extends TestCase
{
    public function testFooterComponent()
    {
        $footer = $this->component(Footer::class);
        $footer->assertSeeText('Cerita Dapur');
    }
}
