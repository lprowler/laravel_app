@extends('layouts.default')
@section('title','update '.$user->name.' profile')
@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>update user profile</h5>
            </div>
            <div class="card-body">
                @include('shared._errors')
                <div class="gravatar_edit">
                    <a href="https://gravatar.w3tt.com/avatar/email" target="_blank">
                        <img class="gravatar" src="{{$user->gravatar('200')}}" alt="{{$user->name}}">
                    </a>
                </div>
                <form action="{{route('users.update',$user->id)}}" method="post">
                    {{method_field('PATCH')}}
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="name">name:</label>
                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="email">email:</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="password">password:</label>
                        <input type="password" name="password" id="password" class="form-control" value="{{old('password')}}">
                    </div>
                    <div class="mb-3">
                        <label for="password_confimation">password confirmation:</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="{{old('password_confirmation')}}">
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
        </div>
    </div>
@stop
