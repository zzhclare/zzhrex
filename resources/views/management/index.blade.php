@extends('master')

@section('title', '博客管理')

@section('content')
<div class="ui grid" style="margin:0px;">
    <div class="ui column">
        <!--
        <button class="ui green button right floated"><i class="add icon"></i>添加文章</button>
        -->
        <form method="get" action="" class="ui form search-form" style="float:right;">
            <div class="ui icon input">
                <input type="text" placeholder="Search article">
                <i class="inverted circular search link icon"></i>
            </div>
        </form>
    </div>
</div>
<div class="ui divided items">
  <div class="item">
    <div class="ui small rounded image">
        <img src="{{asset('images/gundam.jpg')}}">
    </div>
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
    <div class="ui small rounded image">
        <img src="{{asset('images/gundam.jpg')}}">
    </div>
    <div class="content">
      <a class="header">My Neighbor Totoro</a>
      <div class="meta">
        <span class="cinema">IFC Cinema</span>
      </div>
      <div class="description">
        <p></p>
      </div>
      <div class="extra">
        <div class="ui right floated primary button">
          Detail
          <i class="right chevron icon"></i>
        </div>
        <div class="ui red label">Limited</div>
      </div>
    </div>
  </div>
  <div class="item">
    <div class="ui small rounded image">
        <img src="{{asset('images/man.jpg')}}">
    </div>
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

<style>
.vertical.segment{
    min-height:200px;
}
</style>
@endsection
