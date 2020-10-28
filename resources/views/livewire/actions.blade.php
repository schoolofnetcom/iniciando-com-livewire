<div>
    Meu valor é
    <input wire:model="input" type="text">

    <button wire:click="limparInput">Clear Input</button>
    <br><br>
    <button wire:click="setValue('Leonan')">Set Other Value</button>
    <br>
    <button wire:mouseenter="setValue('Mouse Over')">Over</button>
    <br>
    <form action="#" wire:submit.prevent="submit">
        <button>Enviar</button>
    </form>
    <br>
    <button wire:click="$set('input', 'Alterado diretamente')">Trocar diretamente</button>
</div>
