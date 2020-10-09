<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Ultim'ora</h1>
            <ul> 
                @foreach($names as $name)
                <li>
                    @livewire('figlio',[$name], key($name))
                </li>
                @endforeach
            </ul>
            
            <h4 style="color: blue;">{{now()}}</h4>
            
            <button wire:click="$emit('refreshMe')">Refresh</button>

        </div>
    </div>
</div>
