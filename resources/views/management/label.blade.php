@extends('management.index')

@section('title', '标签管理')

@section('managementContent')
<div class="ui segment container" style="min-height:900px;">
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
            <td>{{$label->color}}</td>
            <td></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script>
$(document).ready(function(){
    $('.vertical.menu .item').removeClass('active');
    $('.label.item').addClass('active');
});
</script>
@endsection
