<div>
    <button wire:click='createNewUser'>Create new user</button>

    <ul>
        @foreach($users as $user)
            <li style="margin-bottom: 10px">
                Name: {{ $user->name }}. Email: {{$user->email}}
            </li>
        @endforeach
    </ul>
</div>
