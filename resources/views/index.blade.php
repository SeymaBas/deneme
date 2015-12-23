@extends('layout')
@section('content')

    @foreach($posts as $post)
        <a href="{{url()}}/YaziDetay/{{$post->id}}" style="text-decoration: none;">
            <div style="font-size: 15px;font-weight: bold;">{{$post->title}}</div>
            <div style="font-size: 10px;color: #8d8d8d">{{$post->created_at}}</div>
            <p style="margin-top:0px; font-size: 12px;">
                {{ str_limit($post->content,20)}}... <a style="color: #ff0000;font-size: 25px;"
                                                        href="{{url()}}/YaziDetay/{{$post->id}}">devamı...</a>
            </p>

        </a>

    @endforeach

@endsection