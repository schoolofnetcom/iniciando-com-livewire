<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DataBinding extends Component
{
    public $name = "Leonan";
    public $age = 33;
    public $show = false;
    public $select = 'LARAVEL';

    public function render()
    {
        return view('livewire.data-binding');
    }
}
