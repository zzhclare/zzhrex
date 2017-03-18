<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>@yield('title')</title>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/semantic.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/github-markdown.css') }}">
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/semantic.js') }}"></script>
</head>
<body>
<form class="ui form article-form" method="post" action="{{ url('publish/save') }}">
    <div class="ui fluid grid">
        <div class="ui sixteen wide column" style="padding-bottom:0px;margin-top:20px;">
            <div class="ui fluid massive input" style="margin:10px;">
                <input type="text" id="input-header" name="title" placeholder="文章标题">
            </div>
            <div class="ui button" id="submit" style="position:absolute;top:38px;right:38px;z-index:100;">save</div>
        </div>
        <div class="ui eight wide column" style="padding:30px;">
            <div class="ui field">
                <textarea rows="45" name="content" value="" id="input-field">
                </textarea>
            </div>
        </div>
        <div class="ui eight wide column" style="padding:30px;">
            <div class="ui segment" style="height:100%;">
                <article class="markdown-body">
                </article>
            </div>
        </div>
        <textarea style="display:none" id="description" name="description"></textarea>
        <input type="hidden" id="labels" name="labels">
    </div>
    <div class="ui modal">
        <i class="close icon"></i>
        <div class="header">摘要 标签</div>
        <div class="content">
            <div class="ui form">
                <div class="field">
                    <label>摘要Text</label>
                    <textarea rows="10" name="description" value="" id="modal-description" style="width:100%;">
                    </textarea>
                </div>
                <div class="field">
                    <label>选择标签</label>
                    <div class="ui fluid multiple search selection dropdown">
                        <i class="dropdown icon"></i>
                        <input class="search" tabindex="0">
                        <div class="default text">Labels</div>
                        <div class="menu">
                            @foreach($labels as $label)
                            <div class="item" data-value="{{$label->name}}">{{$label->name}}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="actions">
            <div class="ui red button">Cancel</div>
            <div class="ui green button submit">Submit</div>
        </div>
    </div>
</form>
@include('background')
</body>
<script>
$(document).ready(function(){
    $('.form').form();
    $('.dropdown').dropdown({allowAdditions: true, forceSelection: false});

    var header = "";
    $('#input-header').change(function(){
        header = $(this).val();
    });

    $('#input-field').change(function(){
        $('.markdown-body').html('<h1>' + header + '</h1>' + $(this).val());
    });

    $('#submit').click(function(){
        $('.modal').modal('show');
    });

    $('.submit').click(function(){
        var labels = $('.multiple.selection').dropdown('get value');
        $('#labels').val(JSON.stringify(labels));
        $('#description').val($('#modal-description').val());
        $('.article-form').submit();
    });

});
</script>
