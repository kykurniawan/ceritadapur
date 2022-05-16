<?php

namespace Tests\Feature\LiveWire\Auth\Forms;

use App\Http\Livewire\Auth\Forms\Signup;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SignupTest extends TestCase
{
    public function testCanRenderSignupForm()
    {
        $component = Livewire::test(Signup::class);
        $component->assertStatus(200);
    }

    public function testSignupPageContainSignupForm()
    {
        $this->get('/signup')->assertSeeLivewire(Signup::class);
    }
}
