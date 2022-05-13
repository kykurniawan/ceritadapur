<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class LatestRecipes extends Component
{
    public $latestRecipes = [];

    public function mount()
    {
        $latestRecipes = [];
        for ($i = 0; $i < 8; $i++) {
            $latestRecipes[$i] = (object)[
                'id' => $i,
                'name' => 'Resep Keren ' . $i,
                'picture' => 'https://via.placeholder.com/400x300.png?text=Recipe+Image'
            ];
        }

        $this->latestRecipes = $latestRecipes;
    }

    public function render()
    {
        return view('livewire.home.latest-recipes');
    }
}
