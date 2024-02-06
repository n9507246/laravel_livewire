<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
class Clicker extends Component
{
    // #[Rule('required|min:2|max:50')]
    public $name;
    
    // #[Rule('required|email|unique:users')]
    public $email;

    // #[Rule('required|min:5')]
    public $password;
    
    
    public function createNewUser(){

        // $this->validate();

        $this->validate([
            'name' => 'required|min:2|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ]);

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
