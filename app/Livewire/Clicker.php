<?php

namespace App\Livewire;

use Livewire\Component;

class Clicker extends Component
{
    public function createNewUser(){
        dump('Click');
    }

    public function render()
    {
        return view('livewire.clicker', [
            'users' => \App\Models\User::all()
        ]);
    }
}
