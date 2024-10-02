<div>
    <h1>Employee Table</h1>
    <form action="search" method="get">
        <input type="text" name="search" placeholder="Search here" value="{{@$search}}">
{{--        @ means yedi search ma value xa bhane value ma data basyo natra basena--}}
        <button type="submit">Search</button>
    </form>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Age</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Created At</td>
            <td>Operation</td>
        </tr>
        @foreach($data as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->age}}</td>
                <td>{{$d->email}}</td>
                <td>{{$d->phone}}</td>
                <td>{{$d->created_at}}</td>
                <td>
                    <a href="delete/{{$d->id}}">Delete</a>
                    <a href="edit/{{$d->id}}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div>
