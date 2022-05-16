<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingTest extends TestCase
{
    public function testNotFoundRoute()
    {
        $this->get('/not-found')->assertStatus(404);
    }

    public function testHomeRoute()
    {
        $this->get(route('home.index'))->assertStatus(200);
    }

    public function testSigninRoute()
    {
        $this->get(route('auth.signin'))->assertStatus(200);
    }

    public function testSignupRoute()
    {
        $this->get(route('auth.signup'))->assertStatus(200);
    }
}
