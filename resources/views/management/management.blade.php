@extends('management.index')

@section('title', '博客管理')

@section('managementContent')
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
<script>
$(document).ready(function(){
    $('.vertical.menu .item').removeClass('active');
    $('.management.item').addClass('active');
});
</script>
@endsection
