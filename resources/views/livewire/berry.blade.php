<div>

    <div class="md:grid md:grid-cols-5">

        <div></div>

        <div class="w-full col-span-3 mx-auto space-y-8">
            {{-- SEARCH BOX --}}
            <div class="space-y-4">
                <h1 class="text-2xl font-bold text-white">Search</h1>
                
                <div class="flex justify-center gap-4">
                    <input type="text" class="input input-bordered">
                    <button class="btn btn-neutral" wire:click="searchBerry">
                        <span class="w-50" wire:loading.remove wire:model='searchBerry'>Search</span>
                        <span class="w-50 loading loading-spinner" wire:loading wire:model='searchBerry'></span>
                    </button>
                </div>
            </div>
                
            {{-- RESULTS --}}
            <div class="space-y-4">
                <p>
                    {{-- {{ $pokemon }} --}}
                    @foreach ($pokemon['abilities'] as $key => $ability )
                    <h2> {{$pokemon['abilities'][$key]['ability']['name']}} </h2>
                    @endforeach
                </p>
            </div>

        </div>

        <div></div>
        
    </div>

</div>