     <div class="container">
      <div class="row">
         <div class="col-12">
            <h2 class="undertitle">Categorie trattate</h2>
               <div class="row col-6">
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
                  </ul>
               </div>
         </div>
      </div>
   </div>
