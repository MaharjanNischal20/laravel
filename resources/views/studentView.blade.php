<div>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Age</td>
            <td>Gender</td>
        </tr>
    @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->Name}}</td>
                <td>{{$student->Age}}</td>
                <td>{{$student->Gender}}</td>
            </tr>
    @endforeach
        </table>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div>
