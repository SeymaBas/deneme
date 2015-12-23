<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
<div class="container">
    <a href="{{url()}}/">Anasayfa </a>
    <a href="{{url()}}/auth/login">Giris Yap </a>
    <a href="{{url()}}/auth/register">Kayıt </a>
    <h2>Bloguma Hoşgeldiniz.</h2>

    @yield('content')
</div>
</body>
</html>