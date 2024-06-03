@extends('layouts.default')
@section('title','home')
@section('content')
    @if(\Illuminate\Support\Facades\Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    @include('shared._status_form')
                </section>
                <h4>data list:</h4>
                @include('shared._feed')
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info',['user'=>\Illuminate\Support\Facades\Auth::user()])
                </section>
                <section class="stat mt-2">
                    @include('shared._stat',['user'=>\Illuminate\Support\Facades\Auth::user()])
                </section>
            </aside>
        </div>
    @else
        <div class="bg-light p-3 p-sm-5 rounded">
        <h1>hello laravel</h1>
        <p class="lead">你看到的是 <a href="/">Laravel 入门教程</a></p>
        <p>一切，将从这里开始</p>
        <p><a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a></p>
    </div>
    @endif
@stop
