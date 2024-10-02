<div>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Age</td>
            <td>Phone</td>
            <td>Created At</td>
            <td>Operation</td>
        </tr>
        @foreach($data as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->age}}</td>
                <td>{{$d->phone}}</td>
                <td>{{$d->created_at}}</td>
                <td><a href="delete/{{$d->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div>
