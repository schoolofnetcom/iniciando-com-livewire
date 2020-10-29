<div>

    @foreach($users as $user)
        <div>
            @livewire('componente-filho', ['user' => $user], key($user->id))
            {{-- <button wire:click="removeUser('{{$user->id}}')">Remove</button> --}}
        </div>
    @endforeach

    <hr>

    <button wire:click='$refresh'>Refresh</button> : {{ now() }} <br>
    <button wire:click='$emit("atualizaFilho")'>Atualiza Filho</button> : {{ now() }}
</div>
