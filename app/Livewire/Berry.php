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
        $api = new PokeApi;
        // $api->pokemon('pikachu')
        $this->pokemon = json_decode($api->pokemon('pikachu'), true);
    }

    public function searchBerry(){
        $api = new PokeApi;
        // $api->pokemon('pikachu')
        $this->pokemon = json_decode($api->pokemon('pikachu'), true);
        $this->formattedPokemon = json_encode($this->pokemon, JSON_PRETTY_PRINT);
        // dd($this->pokemon['stats'][5]['stat']['name']);
        // dd($this->pokemon);
    }
    
}
