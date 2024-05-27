@extends('layout.default')
@section('title','home')
@section('content')
    <div class="bg-light p-3 p-sm-5 rounded">
        <h1>hello laravel</h1>
        <p class="lead">你看到的是 <a href="/">Laravel 入门教程</a></p>
        <p>一切，将从这里开始</p>
        <p><a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a></p>
    </div>
@stop
