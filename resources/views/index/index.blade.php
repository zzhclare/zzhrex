@extends('master')

@section('title', 'zzhRex')

@section('top-content')
<div class="ui top fixed secondary pointing menu">
    <a class="ui item" href="/" style="font-size:50px;font-family:'Dancing Script', sans-serif;margin-left:57px;padding:14px;cursor:pointer;">zzhRex</a>
    <div class="right item" style="margin-right:57px;">
        <a class="ui active top item" href="/">
            Home
        </a>
        <a class="ui top item">
            Blogs
        </a>
        <a class="ui top item">
            About
        </a>
    </div>
</div>
<script>
$(document).ready(function(){

    $('.top.item').click(function(){
        $('.top.item').removeClass('active');
        $(this).addClass('active');
    });
});
</script>

@endsection
