<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class LoginModal extends Component
{
    public $email = '';
    public $password = '';

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    protected $messages = [
        'email.required' => 'Alamat email harus diisi.',
        'email.email' => 'Alamat email tidak valid.',
        'password.required' => 'Kata sandi harus diisi.',
    ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        // Logika login

        return "logika login";
    }

    public function render()
    {
        return view('livewire.auth.login-modal');
    }
}
