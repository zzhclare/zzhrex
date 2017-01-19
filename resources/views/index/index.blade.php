@extends('master')

@section('title', 'zzhRex')

@section('top-content')
<div class="ui top fixed secondary pointing menu">
    <div class="container">
        <a class="ui item" href="/" style="font-size:50px;font-family:'Dancing Script', sans-serif;padding-top:14px;padding-bottom:14px;">
            zzhRex
        </a>
        <div class="right item">
            <a class="ui active item" href="/">
                Home
            </a>
            <a class="ui item" href="/">
                Events
            </a>
            <a class="ui item" href="/">
                Contact
            </a>
            <a class="ui item" href="/Login">
                Login
            </a>
        </div>
    </div>
</div>
<div class="ui container" style="background:transparent;">
    @yield('content')
</div> 

@endsection
