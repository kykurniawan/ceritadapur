<?php

namespace Tests\Feature\LiveWire\Auth\Forms;

use App\Http\Livewire\Auth\Forms\Signin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SigninTest extends TestCase
{
    public function testCanRenderSigninForm()
    {
        $component = Livewire::test(Signin::class);
        $component->assertStatus(200);
    }

    public function testSigninPageContainSigninForm()
    {
        $this->get('/signin')->assertSeeLivewire(Signin::class);
    }
}
