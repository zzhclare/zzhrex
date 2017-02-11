@extends('master')

@section('title', 'Login')

@section('top-content')

<div class="ui middle aligned center aligned grid" style="height:100%">
    <div class="column" style="max-width:450px;">
        <h2 class="ui header" style="font-size:50px;font-family:'Dancing Script', sans-serif;">
            zzhRex
        </h2>
        <form class="ui large form">
            <div class="ui stacked segment">
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
            </div>
        </form>
    </div>
</div>

@endsection
