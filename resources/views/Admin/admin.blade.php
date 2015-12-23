<ul>
    @foreach($post as $posts)

        <li>{{$post->title}}
            <a href="{{url()}} /Admin/Duzenle/{{$post->id}}">Duzenle</a>
            <a href="{{url()}}/Admin/Guncelle/{{$post->id}}">Guncelle</a>
            <a href="{{url()}}/Admin/Sil/{{$post->id}}">Sil</a>

        </li>
    @endforeach
</ul>