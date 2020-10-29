<div>

    @foreach($users as $user)
        <div>
            @livewire('componente-filho', ['user' => $user], key($user->id))
            <button wire:click="removeUser('{{$user->id}}')">Remove</button>
        </div>
    @endforeach

    <hr>

    Refresh componente pai<button wire:click='$refresh'>Refresh</button> : {{ now() }}
</div>
