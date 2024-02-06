<?php

namespace App\Livewire;

use Livewire\Component;

class Clicker extends Component
{
    public function createNewUser(){
        \App\Models\User::factory()->create([
            'name' => 'New test User',
            'email' => 'test2@example.com',
        ]);
    }

    public function render()
    {
        return view('livewire.clicker', [
            'users' => \App\Models\User::orderBy('id', 'desc')->get()
        ]);
    }
}
