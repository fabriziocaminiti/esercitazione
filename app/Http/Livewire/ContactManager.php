<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactManager extends Component
{
    public $contacts;
    public $contact_name;
    public $contact_to_delete;
   
    public function deleteContact(){
      
        Contact::whereName($this->contact_to_delete)->delete();
      
    }
    public function mount()
    {
        $this->contacts=Contact::all();
       
    }
    public function saveContact(){
       $newContact = new Contact();
       $newContact->name=$this->contact_name;
       $newContact->save();
     
    }
    public function render()
    {
        return view('livewire.contact-manager');
    }
}
