@extends('layout')
@section('content')
    <h3>Yazı Detayı</h3>
    <div style="font-size: 15px;font-weight: bold;">{{$post->title}}</div>
    <p style="margin-top:20px; font-size: 12px;">
        {{$post->content}}
    </p>
@endsection