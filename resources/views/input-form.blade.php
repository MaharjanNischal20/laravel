<div>
    <form action="form" method="post">
        @csrf
        <div>
            <div>
            <input placeholder="Enter User name" type="text" name="username" value="{{old("username")}}" class="{{$errors->first('username')?'input-error':''}}"/>
            <span style="color:red">@error("username"){{$message}}@enderror</span>
            </div>
            <div>
                <input placeholder="Enter User email" type="email" name="email" value="{{old("email")}}" class="{{$errors->first('username')?'input-error':''}}"/>
                <span style="color:red">@error("email"){{$message}}@enderror</span>
            </div>
            <div>
                <input placeholder="Enter User city" type="text" name="city" value="{{old("city")}}" class="{{$errors->first('username')?'input-error':''}}"/>
                <span style="color:red">@error("city"){{$message}}@enderror</span></div>
            <button type="submit">Submit</button>
        </div>
    </form>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</div>

<style>
    .input-error{
        border: 1px solid red;
        color: red;
    }
</style>
