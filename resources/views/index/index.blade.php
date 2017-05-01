@extends('master')

@section('title', 'zzhRex')

@section('content')
<div class="ui thirteen wide column">
    <div class="ui segment container" style="min-height:900px;">
        <div class="ui divided items">
            @foreach($articles as $ar)
            <div class="item">
                <div class="content">
                    <a class="header" href="{{ url('/article').'/'.$ar->id }}">{{$ar->header}}</a>
                    <div class="description">
                        {{$ar->description}}
                    </div>
                    <div class="extra">
                        @foreach($ar->labels as $label)
                        <div class="ui {{App\Label::where('name', $label)->first()->color}} label">{{$label}}</div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="ui three wide column ">
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
                        @foreach(App\Label::all() as $label)
                        <div class="ui divider"></div>
                        <p class="transition hidden"><a class="label_{{$label->id}}">{{$label->name}}</a></p>
                        @endforeach
                    </div>
                    <div class="title">
                        <i class="calendar icon"></i>
                        文章存档
                    </div>
                    <div class="content">
                        @foreach(App\Article::getTimeGroup() as $date)
                        <div class="ui divider"></div>
                        <p class="transition hidden"><a>{{$date}}</a></p>
                        @endforeach
                    </div>
                    <div class="title">
                        <i class="unhide icon"></i>
                        阅读排行
                    </div>
                    <div class="content">
                        @foreach(App\Article::getRank() as $rank)
                        <div class="ui divider"></div>
                        <p class="transition hidden" ><a href="{{ url('/article').'/'.$rank->id }}">{{$rank->header}} ({{$rank->read_times}}次)</a></p>
                        @endforeach
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
