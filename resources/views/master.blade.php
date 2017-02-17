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
@yield('additional_js')
</head>

<body>
@include('background')
@yield('top-content')
</body>
</html>

