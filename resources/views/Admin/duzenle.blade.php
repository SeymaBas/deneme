@if(Session::get('mesaj'))
    {{Session::get('mesaj')}}

@endif

{!! Form::open(array('url'=>url().'/Admin/Duzenle','method'=>'post')) !!}
<input type="hidden" name="id" value="{{$post->id}}"/>
<div>
    <label>Başlık</label>
    <input type="text" name="title" value="{{$post->title}}"/>
</div>

<div>
    <label>Yazı</label>
    <textarea name="content" rows="5">{{$post->content}}</textarea>
</div>
<div>
    <button type="submit">Duzenle</button>
</div>



{!! Form::close() !!}