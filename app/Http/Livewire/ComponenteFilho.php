<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ComponenteFilho extends Component
{
    public $user = '';

    // protected $listeners = ['atualizaFilho' => '$refresh'];

    protected $listeners = ['geral' => '$refresh'];

    public function mount($user) {
        $this->user = $user;
    }

    // public function atualizaFilho() {

    // }

    public function atualizaPai() {
        $this->emitUp('geral');
    }

    public function render()
    {
        return view('livewire.componente-filho');
    }
}
