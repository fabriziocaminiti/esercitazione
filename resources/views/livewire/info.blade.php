     <div class="container">
      <div class="row">
         <div class="col-12">
            <h2 class="undertitle">Categorie trattate</h2>
               <div class="row col-12 col-md-4">
                  <ul class="mt-5">
                  <li><input wire:model='sport' type="text"></li>
                  <span>{{$sport}}</span>
                  <select class="mt-3" wire:model='sport'>
                     <option>calcio</option>
                     <option>basket</option>
                     <option>tennis</option>
                     <option>ping pong</option>
                     <option>volley</option>
                  </select>
                  <li class="mt-3"><input wire:model='cronaca' type="text"></li>
                  <span>{{$cronaca}}</span>
                  <select class="mt-3" wire:model='cronaca'>
                     <option>nera</option>
                     <option>rosa</option>
                     <option>bianca</option>
                     <option>scienza</option>
                     <option>HiTech</option>
                  </select>
                  <li class="mt-3"><input wire:model='ministero' type="text"></li>
                  <span>{{$ministero}}</span>
                  <select class="mt-3" wire:model='ministero'>
                     <option>interni</option>
                     <option>salute</option>
                     <option>sport</option>
                     <option>cultura</option>
                     <option>istruzione</option>
                  </select>
                  <li class="mt-3"><input wire:model='annunci' type="text"></li>
                  <span>{{$annunci}}</span>
                  <select class="mt-3" wire:model='annunci'>
                     <option>lavoro</option>
                     <option>affitti</option>
                     <option>oggetti in vendita</option>
                  </select>
                  <li class="mt-3"><input wire:model='lavoro' type="text"></li>
                  <span>{{$lavoro}}</span>
                  <select class="mt-3" wire:model='lavoro'>
                     <option>aziende</option>
                     <option>ristorazione</option>
                     <option>supermercati</option>
                     <option>pubblico</option>            
                  </select>
                  </ul>
               </div>
         </div>
      </div>
   </div>
