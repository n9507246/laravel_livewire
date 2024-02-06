<?php

namespace App\Livewire;

use Livewire\Component;

class Clicker extends Component
{
    public $name;
    public $email;
    public $password;
    
    
    public function createNewUser(){
        \App\Models\User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);
    }

    public function render()
    {
        return view('livewire.clicker', [
            'users' => \App\Models\User::orderBy('id', 'desc')->limit(10)->get()
        ]);
    }
}
