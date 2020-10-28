<div>
    <!-- <input wire:model.debounce.3000ms="name" type="text" name="name">
    <input wire:model.lazy="name" type="text" name="name"> -->
    <input wire:model="name" type="text" name="name">
    Meu nome é {{ $name }}

    <br>

    Mostrar idade
    <input wire:model="show" type="checkbox">

    @if($show)
        Minha idade é {{ $age }}
    @endif

    <hr>

    Dado selecionado {{ $select }}
    <select wire:model="select" name="" id="">
        <option>PHP</option>
        <option>LARAVEL</option>
        <option>LIVEWIRE</option>
    </select>
</div>
