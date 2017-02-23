@extends('master')

@section('title', 'zzhRex')

@section('top-content')
<div class="ui sidebar inverted vertical menu">
    <div class="ui item zzhrex" style="font-size:50px;font-family:'Dancing Script', sans-serif;padding-top:14px;padding-bottom:14px;cursor:pointer;">
        zzhRex
    </div>
    <a class="item">
        1
    </a>
    <a class="item">
        1
    </a>
    <a class="item">
        1
    </a>
    <a class="item">
        1
    </a>
</div>
<div class="ui top fixed secondary pointing menu">
    <div class="ui item zzhrex" style="font-size:50px;font-family:'Dancing Script', sans-serif;margin-left:57px;padding:14px;cursor:pointer;">
        zzhRex
    </div>
    <div class="ui container">
        <div class="right item">
            <a class="first active item" href="/">
                Home
            </a>
            <a class="first item">
                Events
            </a>
            <a class="first item">
                Contact
            </a>
            <!--
            <div class="ui dropdown item first">
                zzhRex
                <i class="dropdown icon"></i>
                <div class="menu transition hidden">
                    <a class="sec item">a</a>
                    <a class="sec item">b</a>
                    <a class="sec item">c</a>
                </div>
            </div>
            -->
            <a class="first item login">
                Login
            </a>
        </div>
    </div>
</div>
<div class="pusher">
    <div class="ui container" style="background:transparent;">
        @yield('content')
    </div> 
</div>
<div class="ui small modal login">
    <i class="close icon"></i>
        <div class="ui header center aligned" style="font-size:50px;font-family:'Dancing Script', sans-serif;">
            zzhRex
        </div>
    <div class="content">
        <form class="ui form login" method="post" action="{{ url('/login') }}">
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
            <div class="ui fluid teal submit button" id="login-submit">Login</div>
            <div class="ui error message"></div>
        </form>
    </div>
</div>

<script>
$(document).ready(function(){
    $('.ui.dropdown').dropdown();

    $('.ui.modal.login').modal({blurring: true});

    $('.first.item.login').click(function(){
        $('.modal.login').modal('show');
    });

    $('.zzhrex').click(function(){
        $('.sidebar').sidebar({'dimPage': false}).sidebar('setting', 'transition', 'overlay').sidebar('toggle');
    });

    $('.first.item').click(function(){
        $('.first.item').removeClass('active');
        $(this).addClass('active');
    });

    $('#login-submit').click(function(){
        $('.login.form').submit();
    });
});
</script>

@endsection
