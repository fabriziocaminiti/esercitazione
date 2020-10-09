<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Info extends Component
{
    public $sport;
    public $cronaca;

    public function render()
    {
        return view('livewire.info');
    }
    //public function cambiaNome($nuovoNome){
      //  $this->sport=$nuovoNome;
    //}
}


