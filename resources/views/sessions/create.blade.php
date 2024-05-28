@extends('layouts.default')
@section('title','user login')
@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>login</h5>
            </div>
            <div class="card-body">
                @include('shared._errors')
                <form method="post" action="{{route('login')}}">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="email">email:</label>
                        <input class="form-control" type="email" name="email" id="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="password">password:</label>
                        <input class="form-control" type="password" name="password" id="password" value="{{old('password')}}">
                    </div>
                    <button class="btn btn-primary" type="submit">login</button>
                </form>
                <hr>
                <p>No account yet? <a href="{{route('signup')}}">Register Now</a></p>
            </div>
        </div>
    </div>
@stop
