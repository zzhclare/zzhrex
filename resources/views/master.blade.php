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
@include('background')
@yield('top-content')
</body>
</html>

