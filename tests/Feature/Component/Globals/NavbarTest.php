<?php

namespace Tests\Feature\Component\Globals;

use App\View\Components\Globals\Navbar;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NavbarTest extends TestCase
{
    public function testNavbarComponent()
    {
        $navbar = $this->component(Navbar::class);
        $navbar->assertSeeText('Cerita Dapur');
    }
}
