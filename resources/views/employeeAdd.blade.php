<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <h1>Employee</h1>
    <form action="employee" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Employee Name">
        <br><br>
        <input type="email" name="email" placeholder="Enter Employee email">
        <br><br>
        <input type="text" name="age" placeholder="Enter Employee Age">
        <br><br>
        <input type="number" name="number" placeholder="Enter Employee Phone">
        <br><br>
        <button type="submit">Add</button>
    </form>
</div>
