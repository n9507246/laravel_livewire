<div>
    <div class="m-auto w-75 card mb-4 p-4 shadow">
        <form wire:submit='createNewUser' >
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input wire:model='name' type="text" class="form-control" id="name" name='name' aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input wire:model='email' type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input wire:model='password' type="password" class="form-control" id="password" name="password">
            </div>
            <button class="btn btn-success">Submit</button>
        </form>
    </div>    
    
    <div class="m-auto w-75 card mb-4 p-1 shadow ">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Created at</th>
            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>    
                    </tr>
                @endforeach
            
            </tbody>
        </table>
    </div>
</div>