<p>I am from about page. My name is {{$name}}</p>

@include("admin.footer",["page"=>"This is about page"])
<x-message-banner msg="Login successfully" class="success"/>
<x-message-banner msg="signUp successfully" class="success"/>

<style>
    .success{
        color: green;
        background: lightgreen;
        border-radius: 2px;
        display: inline-block;
        padding: 3px 10px;
        margin: 10px;
    }
    .error{
        color: red;
        background: darkred;
        border-radius: 2px;
        display: inline-block;
        padding: 3px 10px;
        margin: 10px;
    }
</style>
