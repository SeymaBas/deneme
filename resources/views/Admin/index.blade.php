@if(Session::get('mesaj'))
    {{Session::get('mesaj')}}

@endif

{{Auth::user()->name}} Hoşgeldin, <br>
<a href="{{url()}}/auth/logout">Çıkış</a>


{!! Form::open(array('url'=>url().'/Admin/Kaydet','method'=>'post')) !!}

<div>
    <label>Başlık</label>
    <input type="text" name="title"/>
</div>

<div>
    <label>Yazı</label>
    <textarea name="content" rows="5"></textarea>
</div>
<div>
    <button type="submit">Kaydet</button>
</div>



{!! Form::close() !!}



<h3>Tüm Yazılar</h3>
<ul>
    @foreach($posts as $post)

        <li>{{$post->title}}
            <a href="{{url()}}/Admin/Duzenle/{{$post->id}}">Duzenle</a>
            <a href="{{url()}}/Admin/Sil/{{$post->id}}">Sil</a>

        </li>
    @endforeach
</ul>