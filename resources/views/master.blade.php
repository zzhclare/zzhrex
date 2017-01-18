<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>@yield('title')</title>
<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('/css/semantic.min.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Catamaran|Dancing+Script|Pinyon+Script|Righteous|Tangerine" rel="stylesheet">
@yield('additional_css')
<!--
<link href="https://fonts.googleapis.com/css?family=Catamaran|Dancing+Script|Merriweather|Montserrat|Pinyon+Script|Righteous|Tangerine" rel="stylesheet">
-->
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/semantic.min.js') }}"></script>
@yield('additional_js')
</head>

<body>
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
            <a class="ui item" href="/">
                Login
            </a>
        </div>
    </div>
</div>
<div class="ui container" style="background:transparent;">
    @yield('content')
</div> 
</body>
</html>
<style>
#page-footer {
    height: 30px;
    color: black;
    text-align: center;
}
</style>
<script>
</script>

