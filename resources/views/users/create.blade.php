@extends('layouts.default')
@section('title','user register')
@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>register</h5>
            </div>
            <div class="card-body">
                @include('shared._errors')
                <form method="post" action="{{route('users.store')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">username:</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label for="email">email:</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="password">password:</label>
                        <input type="password" name="password" id="password" class="form-control"
                               value="{{old('password')}}">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">confirm password:</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                               value="{{old('password_confirmation')}}">
                    </div>

                    <button type="submit" class="btn btn-primary">register</button>
                </form>
            </div>
        </div>
    </div>
@stop

