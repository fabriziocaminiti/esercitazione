<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Tutte le news, curiosità e approfondimenti su queste città</h1>
        </div>
<div class="row mt-3">
   @foreach($contacts as $contact)
   <div class="col-12 col-md-4">
   <p style="font-size: 32px;">
   {{$contact->name}}
   </p>
   </div>
   @endforeach
</div>
        <div class="col-12 pb-5">
                <input wire:model='contact_name' type="">{{$contact_name}}
                <button class="bg-success" wire:click="saveContact"> Salva contatto</button>
                <input wire:model='contact_to_delete' type="" class="ml-4">{{$contact_to_delete}}
                <button class="bg-danger" wire:click="deleteContact"> Elimina contatto</button>
        </div>

  </div>
</div>