@extends('master')

@section('title', '文章编辑')

@section('additional_css')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/github-markdown.css') }}">
@endsection

@section('content')
<div class="ui segment" style="min-height:900px;">
    <div class="ui left rail">
        <div class="ui sticky">
            <div class="ui secondary vertical pointing menu">
                <a class=" item" href="{{url('/management')}}">Blog Management</a>
                <a class="item">Label Management</a>
                <a class="item">Blog Group Management</a>
                <a class="active item" href="{{url('/publish')}}">Publish A Blog</a>
            </div>
        </div>
    </div>
    <div class="ui horizontal segments">
        <div class="ui segment">
        </div>
        <div class="ui segment">
        </div>
    </div>
</div>

@endsection
