<?php

namespace App\Http\Livewire\Auth\Forms;

use Livewire\Component;

class Signup extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    protected array $rules = [
        'name' => ['required', 'min:2', 'max:30'],
        'email' => ['required', 'email', 'max:128'],
        'password' => ['required', 'min:4',],
        'password_confirmation' => ['required', 'same:password']
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        sleep(5);
        $validatedData = $this->validate();
        $this->reset('password', 'password_confirmation');
    }

    public function render()
    {
        return view('livewire.auth.forms.signup');
    }
}
