<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Padre extends Component
{

    protected $listeners = ['refreshfather'=>'$refresh', 'refreshMe'=>'$refresh'];
    


    public $names=['Napoli omicidio al Vomero','Roma vittoria sul finale','Parigi grande tappa al tour de France','COVID-19 in continua crescita i contagi','Conte si oppone al nuovo decreto salva-Italia'];

    public function refreshMe(){
    $this->emit('refreshMe');
    }
    public function refreshChildren(){
      $this->emit('refreshChildren');
    }
    
    
    public function render()
    {
        return view('livewire.padre');
    }
}
