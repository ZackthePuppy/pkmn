<?php

namespace App\Livewire;

use Livewire\Component;
use PokePHP\PokeApi;

class Berry extends Component
{
    public $api = new PokePHP\PokeApi;
    public $berry;

    public function render()
    {
        return view('livewire.berry');
    }

    public function searchBerry($berry){

    }
    
}
