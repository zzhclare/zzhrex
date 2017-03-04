<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>@yield('title')</title>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/semantic.css') }}">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Catamaran|Dancing+Script|Pinyon+Script|Righteous|Tangerine">
@yield('additional_css')
<!--
<link href="https://fonts.googleapis.com/css?family=Catamaran|Dancing+Script|Merriweather|Montserrat|Pinyon+Script|Righteous|Tangerine" rel="stylesheet">
-->
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/semantic.js') }}"></script>
<!--
<script src="{{ asset('/js/vue.js') }}"></script>
-->

@yield('additional_js')
</head>

<body>
<div class="ui top fixed secondary pointing menu" style="background-color:white;">
    <a class="ui item" href="/" style="font-size:50px;font-family:'Dancing Script', sans-serif;margin-left:57px;padding:14px;cursor:pointer;">zzhRex</a>
    <div class="right item" style="margin-right:57px;">
        <form method="get" action="" class="ui form search-form" style="margin-right:14px;">
            <div class="ui icon input">
                <input type="text" placeholder="Search article">
                <i class="inverted circular search link icon"></i>
            </div>
        </form>
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
<div class="ui container" style="margin-top:100px;background:transparent;">
@yield('content')
</div>
<script>
$(document).ready(function(){

    $('.top.item').click(function(){
        $('.top.item').removeClass('active');
        $(this).addClass('active');
    });
});
</script>
@include('background')
</body>
</html>

