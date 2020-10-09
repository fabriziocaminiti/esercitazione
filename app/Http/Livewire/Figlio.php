<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Figlio extends Component
{

   protected $listeners=['refreshChildren'=>'$refresh','refreshMe'=>'$refresh'];

    public $name;
   
    public function mount($name){
        $this->name=$name;
    }
    public function refreshMeAndfather(){
        $this->emitUp('refreshFather');
    }
    public function render()
    {
        return view('livewire.figlio');
    }
}
