@extends('master')

@section('content')
<div class="ui three wide column">
    <div class="ui secondary vertical pointing menu" style="float:right">
        <a class="item management" href="{{url('/management')}}")}}>Blog Management</a>
        <a class="item label" href="{{url('/label')}}">Label Management</a>
        <a class="item group">Blog Group Management</a>
        <a class="item" href="{{url('/publish')}}">Publish A Blog</a>
    </div>
</div>
<div class="ui thirteen wide column">
@yield('managementContent')
</div>

@endsection
