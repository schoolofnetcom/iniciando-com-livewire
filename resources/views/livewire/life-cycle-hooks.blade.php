<div>

    The name is {{ $name }}<br>
    The last name is {{ $lastName }} <br>
    <input wire:model='name' type="text">
    <input wire:model='lastName' type="text"><br>

    <button wire:click='randomName'>Atualizar nome</button><br>

    @if($hydrate) hydrate - {{ $hydrate }} @endif<br>
    @if($updated) updated - {{ $updated }} @endif<br>
    @if($updating) updating - {{ $updating }} @endif<br>
    @if($newUpdatedName) property name - {{ $newUpdatedName }} @endif




    {{-- The request param is {{ $requestParam }} --}}

    {{--
    <h2>Lista de usuários</h2>

    @if($users)

        <ul>

        @foreach($users as $user)

            <li>{{ $user->name }}</li>

        @endforeach

        </ul>

    @else

        Nenhum usuário registrado...

    @endif
    --}}
</div>
