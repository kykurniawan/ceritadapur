<?php

namespace App\Http\Livewire\Auth\Forms;

use Livewire\Component;

class Signin extends Component
{
    public string $email = '';
    public string $password = '';

    protected array $rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        $this->reset();
    }

    public function render()
    {
        return view('livewire.auth.forms.signin');
    }
}
