@extends('management.index')

@section('title', '博客管理')

@section('managementContent')
<div class="ui segment container" style="min-height:900px;">
    <div class="ui divided items">
        @foreach($articles as $ar)
        <div class="item">
            <div class="content">
                <a class="header">{{$ar->header}}</a>
                <div class="description">
                    {{$ar->description}}
                </div>
                <div class="extra">
                    <div class="ui blue label">IMAX</div>
                    <div class="ui yellow label"><i class="globe icon"></i> Additional Languages</div>
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
