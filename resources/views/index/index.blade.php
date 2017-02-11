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
    <div class="ui item zzhrex" style="font-size:50px;font-family:'Dancing Script', sans-serif;padding-top:14px;padding-bottom:14px;cursor:pointer;">
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
<div class="ui modal login">
    <i class="close icon"></i>
    <div class="header">
        Login
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
});
</script>

@endsection
