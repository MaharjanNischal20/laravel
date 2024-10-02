<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <h1>Profile Page</h1>
{{--    @if(session("user"))--}}
    @if(session("message"))
{{--    <h3>Welcome, {{session('user')}}</h3>--}}
    <h3>Welcome, {{session('message')}}</h3>
    <a href="logout">logout</a>
    @else
    <a href="login">login</a>
    @endif
</div>

