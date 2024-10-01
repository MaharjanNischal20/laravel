@include("admin.header")
<h1>THis is home page</h1>
@include("admin.footer",["page"=>"This is home page"])

<x-message-banner msg="Login successfully!" class="success"/>
<x-message-banner msg="signUp successfully!" class="success"/>

<x-message-banner msg="Login Error" class="error" />

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

