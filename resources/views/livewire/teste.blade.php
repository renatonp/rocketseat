<div>
    <input wire:model.live="search" />

    <hr>

    <ul>
        @foreach($users as $user)
        <li>{{$user->name}}</li>
        @endforeach
    </ul>
</div>
