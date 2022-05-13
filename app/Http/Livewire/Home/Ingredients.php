<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class Ingredients extends Component
{
    public $ingredients = [];

    public function mount()
    {
        $this->ingredients = [
            (object)['name' => 'Beras Merah', 'picture' => 'https://source.unsplash.com/400x200/?Brown+rice'],
            (object)['name' => 'Kacang Hijau', 'picture' => 'https://source.unsplash.com/400x200/?Mung+beans'],
            (object)['name' => 'Telur', 'picture' => 'https://source.unsplash.com/400x200/?Eggs'],
            (object)['name' => 'Kerang', 'picture' => 'https://source.unsplash.com/400x200/?Scallop'],
        ];
    }

    public function render()
    {
        return view('livewire.home.ingredients');
    }
}
