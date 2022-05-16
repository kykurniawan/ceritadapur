<?php

namespace Tests\Feature\Component\Home;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SearchTest extends TestCase
{
    public function testSearchComponent()
    {
        $search = $this->blade('<x-home.search/>');
        $search->assertSeeText('Cari');
    }
}
