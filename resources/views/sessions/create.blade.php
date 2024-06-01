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
                    <div class="form-group">
                        <label for="email">email:</label>
                        <input class="form-control" type="email" name="email" id="email" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="password">password(<a href="{{route('password.request')}}">forget password</a>):</label>
                        <input class="form-control" type="password" name="password" id="password"
                               value="{{old('password')}}">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label" for="remember">remember me</label>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">login</button>
                </form>
                <hr>
                <p>No account yet? <a href="{{route('signup')}}">Register Now</a></p>
            </div>
        </div>
    </div>
@stop
