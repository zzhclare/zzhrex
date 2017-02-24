<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/semantic.css') }}">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Catamaran|Dancing+Script|Pinyon+Script|Righteous|Tangerine">
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/semantic.js') }}"></script>
</head>
<body>
<div class="ui middle aligned center aligned grid" style="height:100%">
    <div class="column" style="max-width:450px;">
        <h2 class="ui header" style="font-size:50px;font-family:'Dancing Script', sans-serif;">
            zzhRex
        </h2>
        <form class="ui large form" method="POST" action="{{ url('/login') }}">
            <div class="ui raised segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="ui user icon"></i>
                        <input type="text" name="username" placeholder="Username">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="ui lock icon"></i>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="ui fluid large teal submit button">Login</div>
                @if(session('error'))
                <div class="ui visible message error">
                    {{session('error')}}
                </div>
                @endif
            </div>
        </form>
    </div>
</div>
@include('background')
<script>
$(document).ready(function(){
    $('.form').form();
    $('.submit').click(function(){
        $('.form').submit();
    });

});
</script>
</body>
</html>
