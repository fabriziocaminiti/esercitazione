<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Info extends Component
{
    public function render()
    {
        return view('livewire.info');
    }

    public function welcome(){
        return view('welcome');
    }
}


