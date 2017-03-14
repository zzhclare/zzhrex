@extends('master')

@section('title', 'zzhRex')

@section('content')
<div class="ui twelve wide column">
    <div class="ui segment container" style="min-height:900px;">
        <div class="ui divided items">
            @foreach($articles as $article)
            <div class="item">
                <div class="content">
                    <a class="header">{{$article}}</a>
                    <div class="meta">
                        <span class="cinema">Union Square 14</span>
                    </div>
                    <div class="description">
                        <p></p>
                    </div>
                    <div class="extra">
                        <div class="ui blue label">IMAX</div>
                        <div class="ui yellow label"><i class="globe icon"></i> Additional Languages</div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="item">
                <div class="content">
                    <a class="header">Watchmen</a>
                    <div class="meta">
                        <span class="cinema">IFC</span>
                    </div>
                    <div class="description">
                        <p></p>
                    </div>
                    <div class="extra">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ui four wide column">
    <div class="ui card">
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
