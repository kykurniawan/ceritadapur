<?php

namespace Tests\Feature\LiveWire\Home;

use App\Http\Livewire\Home\LatestRecipes;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class LatestRecipesTest extends TestCase
{
    public function testCanRenderLatestRecipesComponent()
    {
        $component = Livewire::test(LatestRecipes::class);
        $component->assertStatus(200);
        $component->assertSee('Resep terbaru');
    }

    public function testHomePageContainLatestRecipesComponent()
    {
        $this->get('/')->assertSeeLivewire(LatestRecipes::class);
    }
}
