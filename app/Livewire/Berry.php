<?php

namespace App\Livewire;

use Livewire\Component;
use PokePHP\PokeApi;

class Berry extends Component
{
    public $berry = "hello";
    public $pokemon;
    public $formattedPokemon;

    public function render()
    {
        return view('livewire.berry');
    }

    public function mount(){
        // $this->api = new PokeApi;
    }

    public function searchBerry(){
        $api = new PokeApi;
        // $api->pokemon('pikachu')
        $this->pokemon = json_decode($api->gameGeneration('1'), true);
        $this->formattedPokemon = json_encode($this->pokemon, JSON_PRETTY_PRINT);
        dd($this->pokemon);
    }
    
}
