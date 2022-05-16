<?php

namespace Tests\Feature\LiveWire\Home;

use App\Http\Livewire\Home\Ingredients;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class IngredientsTest extends TestCase
{
    public function testCanRenderIngredientsComponent()
    {
        $component = Livewire::test(Ingredients::class);
        $component->assertStatus(200);
        $component->assertSee('Bahan yang ada di dapurmu?');
    }

    public function testHomePageContainIngredientComponent()
    {
        $this->get('/')->assertSeeLivewire(Ingredients::class);
    }
}
