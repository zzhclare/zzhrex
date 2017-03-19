@extends('master')

@section('title', 'zzhRex')

@section('additional_css')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/github-markdown.css') }}">
@endsection

@section('content')
<div class="ui thirteen wide column">
    <div class="ui main text container">
        <h1>{{$article->header}}</h1>
        <article class="markdown-body">
            {!! addslashes($article->content) !!}
        </article>
    </div>
</div>
<div class="ui three wide column ">
    <div class="ui card" style="float:left">
        <div class="image">
            <img src="{{asset('images/man.jpg')}}">
        </div>
        <div class="content">
            <a class="header">zzhRex</a>
            <div class="meta">
                <span class="date">design at 2017</span>
            </div>
            </br>
            </br>
            </br>
            </br>
            </br>
            <div class="description">
                <div class="ui styled accordion">
                    <div class="title">
                        <i class="table icon"></i>
                        文章分类
                    </div>
                    <div class="content">
                        <p class="transition hidden">
                        分类1
                        </p>
                        <p class="transition hidden">
                        分类2
                        </p>
                        <p class="transition hidden">
                        分类3
                        </p>
                        <p class="transition hidden">
                        分类4
                        </p>
                    </div>
                    <div class="title">
                        <i class="calendar icon"></i>
                        文章存档
                    </div>
                    <div class="content">
                        <p class="transition hidden">
                        2017-02-24
                        </p>
                        <p class="transition hidden">
                        2017-02-25
                        </p>
                    </div>
                    <div class="title">
                        <i class="unhide icon"></i>
                        阅读排行
                    </div>
                    <div class="content">
                        <p class="transition hidden">
                        article 1
                        </p>
                        <p class="transition hidden">
                        article 2
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('.accordion').accordion();
    $('.sticky').sticky({offset : 80});
});
</script>
@endsection

