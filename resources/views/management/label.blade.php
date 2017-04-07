@extends('management.index')

@section('title', '标签管理')

@section('managementContent')
<div class="ui segment container" style="min-height:900px;">
    <form class="ui form label-form" method="POST" action="{{ url('/label/save') }}">
        <table class="ui fluid very basic table center aligned">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Color</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
            @foreach($labels as $label)
            <tr>
                <td><label class="ui label {{$label->color}}">{{$label->name}}</label></td>
                <td>
                    <div class="ui floating dropdown labeled icon button {{$label->color}}" data-color="{{$label->color}}">
                        <input type="hidden" name="color_{{$label->id}}">
                        <i class="tags icon"></i>
                        <span class="text">{{$label->color}}</span>
                        <div class="menu">
                            <div class="item red @if($label->color == 'Red') selected @endif" data-value="red"><div class="ui red empty circular label"></div>Red</div>
                            <div class="item orange @if($label->color == 'Orange') selected @endif" data-value="orange"><div class="ui orange empty circular label"></div>Orange</div>
                            <div class="item @if($label->color == 'Yellow') selected @endif" data-value="yellow"><div class="ui yellow empty circular label"></div>Yellow</div>
                            <div class="item @if($label->color == 'Olive') selected @endif" data-value="olive"><div class="ui olive empty circular label"></div>Olive</div>
                            <div class="item @if($label->color == 'Green') selected @endif" data-value="green"><div class="ui green empty circular label"></div>Green</div>
                            <div class="item @if($label->color == 'Teal') selected @endif" data-value="teal"><div class="ui teal empty circular label"></div>Teal</div>
                            <div class="item @if($label->color == 'Blue') selected @endif" data-value="blue"><div class="ui blue empty circular label"></div>Blue</div>
                            <div class="item @if($label->color == 'Violet') selected @endif" data-value="violet"><div class="ui violet empty circular label"></div>Violet</div>
                            <div class="item @if($label->color == 'Purple') selected @endif" data-value="purple"><div class="ui purple empty circular label"></div>Purple</div>
                            <div class="item @if($label->color == 'Pink') selected @endif" data-value="pink"><div class="ui pink empty circular label"></div>Pink</div>
                            <div class="item @if($label->color == 'Brown') selected @endif" data-value="brown"><div class="ui brown empty circular label"></div>Brown</div>
                            <div class="item @if($label->color == 'Grey') selected @endif" data-value="grey"><div class="ui grey empty circular label"></div>Grey</div>
                            <div class="item @if($label->color == 'Black') selected @endif" data-value="black"><div class="ui black empty circular label"></div>Black</div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="ui buttons">
                        <div class="ui blue button edit" data-id="{{$label->id}}">Rename</div>
                        <div class="or"></div>
                        <div class="ui button red remove" data-id="{{$label->id}}">Remove</div>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="ui green submit button right floated">Submit</div>
    </form>
</div>
<div class="ui modal remove-confirm">
    <i class="close icon"></i>
    <div class="header">Confirm delete</div>
    <div class="content">
        Are you sure to delete this label?
        <form action="{{ url('/label/delete') }}" method="POST" class="ui form delete-form">
            <input type="hidden" name="id" id="delete-input">
        </form>
    </div>
    <div class="actions">
        <div class="ui cancel red button">Cancel</div>
        <div class="ui approve green button">Approve</div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('.vertical.menu .item').removeClass('active');
    $('.label.item').addClass('active');
    $('.dropdown').dropdown();
    $('.modal').modal();

    $('.labeled.dropdown').click(function(){
        var oldColor = $(this).data('color');
        var newColor = $(this).dropdown('get value');
        $(this).removeClass(oldColor);
        $(this).addClass(newColor);
        $(this).attr('data-color', newColor);
    });

    $('.submit').click(function(){
        $('.label-form').submit();
    });

    $('.button.edit').click(function(){
        var id = $(this).data('id');
    });

    $('.button.remove').click(function(){
        var id = $(this).data('id');
        $('#delete-input').val(id);
        $('.modal').modal('show');
    });

    $('.modal .approve').click(function(){
        $('.modal .delete-form').submit();
    });

});
</script>
@endsection
