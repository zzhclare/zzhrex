@extends('master')

@section('title', '博客管理')

@section('content')
<div class="ui four wide column">
    <div class="ui secondary vertical pointing menu" style="float:right">
        <a class="active item" href="{{url('/management')}}")}}>Blog Management</a>
        <a class="item">Label Management</a>
        <a class="item">Blog Group Management</a>
        <a class="item" href="{{url('/publish')}}">Publish A Blog</a>
    </div>
</div>
<div class="ui twelve wide column">
    <div class="ui segment container" style="min-height:900px;">
        <div class="ui divided items">
            <div class="item">
                <div class="content">
                    <a class="header">12 Years a Slave</a>
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
                        <div class="ui right floated primary button">
                            Detail
                            <i class="right chevron icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('.accordion').accordion();

    $('.sticky').sticky({offset: 80});
});
</script>
@endsection
