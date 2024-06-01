@extends('layouts.default')
@section('title','password reset')
@section('content')
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <h5>password reset</h5>
            </div>
            <div class="card-body">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                    <form action="{{route('password.email')}}" method="post">
                        {{csrf_field()}}
                        <div class="mb-3{{$errors->has('email')?'has-error':''}}">
                            <label for="email" class="form-control-label">email:</label>
                            <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control" required>
                            @if($errors->has('email'))
                                <span class="form-text">
                                    <strong>{{$errors->first('email')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">send mail</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@stop
