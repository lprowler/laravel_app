@extends('layouts.default')

@section('title','邮件确认')

@section('content')
    <h2>感谢您在 {{env('APP_NAME')}} 网站进行注册！</h2>
    <p>请点击下面的链接完成注册：<br/>
        <a href="{{route('confirm_email',$user->activation_token)}}"></a>
    </p>
    <p>如果不是您本人的操作，请忽略此邮件。</p>
@stop
