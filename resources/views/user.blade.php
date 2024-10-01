<div>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>password</td>
        </tr>
        <tr>
            @foreach($users as $user)
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>

        </tr>
            @endforeach
    </table>
</div>
