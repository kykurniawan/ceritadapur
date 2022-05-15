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
        sleep(5);
        $validatedData = $this->validate();
        $this->reset('password');

        if ($validatedData['email'] != 'admin@gmail.com' && $validatedData['password'] != 'password') {
            session()->flash('signin.message', 'Email atau kata sandi yang kamu masukkan salah.');
        } else {
            return redirect()->route('home.index');
        }
    }

    public function render()
    {
        return view('livewire.auth.forms.signin');
    }
}
