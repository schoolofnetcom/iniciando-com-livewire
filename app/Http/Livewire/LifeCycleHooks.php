<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\User;

class LifeCycleHooks extends Component
{
    public $name = '';
    public $lastName = '';
    public $hydrate = '';
    public $updated = '';
    public $updating = '';
    public $newUpdatedName = '';
    // public $foo;

    // public $requestParam = '';
    // public $users = [];

    public function mount(Request $request) {
        $this->name = 'Thiago';
        $this->lastName = "Valls";
        // $this->requestParam = $request->input('name');
        // $this->users = User::all();
    }

    public function hydrate() {
        $this->hydrate = now();
    }

    public function updated() {
        $this->updated = now();
    }

    public function updating() {
        $this->updating = now();
        sleep(1);
    }

    public function updatedName() {
        $this->newUpdatedName = 'O nome foi atualizado';
    }

    // public function updatedFoo() {
    //     $this->newUpdatedName = 'O nome foi atualizado';
    // }

    public function randomName() {
        $names = ["Thiago", "Leonan", "Luiz"];
        $this->name = $names[rand(0,2)];
    }

    public function render()
    {
        return view('livewire.life-cycle-hooks');
    }
}
