<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <h1>Employee</h1>
    <form action="/edit-employee/{{$data->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <input type="text" name="name" value="{{$data->name}}" placeholder="Enter Employee Name">
        <br><br>
        <input type="email" name="email" value="{{$data->email}}" placeholder="Enter Employee email">
        <br><br>
        <input type="text" name="age" value="{{$data->age}}" placeholder="Enter Employee Age">
        <br><br>
        <input type="number" name="number" value="{{$data->phone}}" placeholder="Enter Employee Phone">
        <br><br>
        <button type="submit">Update</button>
        <a href="/employeeList">Cancel</a>
    </form>
</div>

