<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <h1>Login Page</h1>
    <form action="login" method="post">
    @csrf
        <input type="text" name="user" placeholder="Enter username">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter Your password">
        <br>
        <br>
        <button type="submit">Login</button>
    </form>

</div>
