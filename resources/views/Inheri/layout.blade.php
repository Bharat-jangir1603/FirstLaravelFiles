<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Inheritence')</title>
</head>
<body>
    <h1>This is Main page where we use <strong>Template Inheritance</strong>:</h1>
    <ul>
        <strong>Links:</strong>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/post">Post</a></li>
    </ul>
    <li>{{'@@yield("yeildName")' }}</li>
    <li>{{'@@section("yeildName")' }}</li>
    <li>{{'@@extends("yeildName")' }}</li>
    @hasSection ('contant')
    @yield('contant')
    @else
        <h3>Section was not found</h3>
    @endif

    @section('hi')
    <i>Hi! section</i>
    @show
    
    @stack('name')
    <Footer>This is Foorter </Footer>
</body>
</html>